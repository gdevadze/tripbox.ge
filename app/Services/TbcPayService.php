<?php

namespace App\Services;

use App\Models\BogPayLog;
use App\Models\BogPayTransaction;
use App\Models\TbcPayTransaction;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Services\MessageService;

class TbcPayService
{
    protected $token = null;
    protected $amount = [];
    protected $currency = 'GEL';
    protected $payment_methods = [];
    protected $loan_config = [];
    protected $model_id = null;
    protected $model_type = '';

    public function __construct(MessageService $messageService)
    {
        $token = $this->token();
        $this->debug = config('tbc.debug');
        $this->messageService = $messageService;
    }

    public function token(){
        $cliendId = config('tbc.client_id');
        $clientSecret = config('tbc.client_secret');
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, config('tbc.url').'/tpay/access-token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "client_Id=$cliendId&client_secret=$clientSecret");

        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'Apikey: '.config('tbc.api_key');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        curl_close($ch);
        $response = json_decode($response, true);
        $this->token = $response['access_token'];
        return $this->token;
    }

    public function setCurrency(string $currency = 'GEL')
    {
        $this->currency = $currency;
        return $this;
    }

    public function setPaymentMethods(array $data = [])
    {
        $this->payment_methods = $data;
        return $this;
    }

    public function setAmount(float $amount)
    {
        $this->amount = [
            'currency' => $this->currency,
            'total' => $amount,
        ];
        return $this;
    }


    public function for(Model $model = null)
    {
        $this->model_id = $model ? data_get($model, 'id') : null;
        $this->model_type = $model ? get_class($model) : null;
        return $this;
    }

    public function order()
    {
//        return $this->amount;
        $url = config('tbc.url').'/tpay/payments';
        $request = $this->postRequest($url, [
            'callbackUrl' => 'https://tripbox.ge/tbc-pay/payment-callback',
            'amount' => $this->amount,
            'returnurl' => 'https://tripbox.ge/user/dashboard',
            'userIpAddress' => \request()->ip(),
            'methods' => $this->payment_methods,
            'language' => 'en'
        ], null, 'json');
        $this->logTransactionCreate([
            'amount' => $this->amount['total'],
            'pay_id' => $request['payId'],
            'status' => $request['status'],
        ]);

//        if ($this->debug){
//            BogPayLog::create([
//                'order_id' => $request['id'],
//                'message' => 'Starting Transaction id: '.$request['id'],
//                'payload' => json_encode($request)
//            ]);
//        }
//        return $link;
        return redirect()->to($request['links'][1]['uri']);
    }

    public function transactionMark($data = [])
    {
        $body = $data;
        $orderDetail = $this->orderDetail($body['PaymentId']);
        $isPaid = 0;
        if ($orderDetail['status'] == 'Succeeded'){
            $isPaid = 1;
        }
        $tbcTransaction = TbcPayTransaction::where('pay_id',$orderDetail['payId'])->first();
        if($tbcTransaction){
            if($tbcTransaction->model){
                $ownerTel = $tbcTransaction->model->car->user->tel;
                $ownerEmail = $tbcTransaction->model->car->user->email;
                $carNumber = $tbcTransaction->model->car->vehicle_number;
                $ownerName = $tbcTransaction->model->car->user->name;
                $fullModel = $tbcTransaction->model->car->brand->name.' '.$tbcTransaction->model->car->brand_model->name;
                $startDate = $tbcTransaction->model->date_from;
                $endDate = $tbcTransaction->model->date_to;
                $totalPrice = number_format($tbcTransaction->model->total_price,2);
                $clientName = '';
                $clientTel = '';
                if($isPaid == 1){
                    if($tbcTransaction->model->user){
                        $clientName = $tbcTransaction->model->user->name;
                        $clientTel = $tbcTransaction->model->user->tel;
                    }
                    
                }
                
                $isDeleted = 0;
                if($orderDetail['status'] == 'Expired'){
                    $isDeleted = 1;
                }
                if($orderDetail['status'] == 'Failed'){
                    $isDeleted = 1;
                }
                $tbcTransaction->model->update([
                    'is_paid' => ($isPaid == 1) ? 1 : 0,
                    'is_deleted' => $isDeleted
                ]);
            }
            $tbcTransaction->update([
                'status' => $orderDetail['status'],
                'is_paid' => $isPaid,
                'completed_at' => ($isPaid == 1) ? Carbon::now() : null
            ]);
            // $subject = 'sdgsd';
            if($isPaid == 1){
                $subject = 'Booking Details for '.$fullModel;
                $this->messageService->bookingFormEmail($ownerEmail,$subject,$tbcTransaction->model);
                $this->messageService->bookingFormEmail('giolazi@yahoo.com',$subject,$tbcTransaction->model);
                $this->messageService->sms($ownerTel,'Tripbox.ge','Dear '.$ownerName.', your car '.$fullModel.' ('.$carNumber.') has been booked from '.$startDate.' to '.$endDate.'. Client: '.$clientName.', phone: '.$clientTel.', Price: '.$totalPrice.' $.');
            }
            // $this->messageService->bookingFormEmail('giodevadze01@gmail.com',$subject,$tbcTransaction->model);   
        }

        // if ($this->debug){
        //     BogPayLog::create([
        //         'order_id' => $data['order_id'],
        //         'message' => 'Transaction Marked id: '.$body['order_id'],
        //         'payload' => json_encode($data)
        //     ]);
        // }
        return true;
    }

    public function orderDetail(string $paymentId)
    {
        $url = config('tbc.url').'/tpay/payments/'.$paymentId;
        return $this->getRequest($url);
    }

    protected function postRequest($url, array $data, string $authorization = null, string $type = 'form_params')
    {
//        return  $data;
        if (!$authorization) {
            $token = $this->requestToken($this->token);
        }

        $client = new Client();

        try {
            $params = $type === 'json' ? ['json' => $data] : ['form_params' => $data];
            $response = $client->post($url, array_merge($params, [
                'headers' => [
                    'Authorization' => $authorization ?: 'Bearer ' . $this->token,
                    'Apikey' => config('tbc.api_key'),
                ],
            ]));
        } catch (ClientException $exception) {
            $error = json_decode($exception->getResponse()->getBody());

            if (!isset($error->error_code)) {
                return $error;
            }

            abort($error->error_code, isset($error->error_message) ? $error->error_message : '');
        }

        return json_decode($response->getBody(),true);
    }

    protected function getRequest(string $url)
    {
        $token = $this->requestToken($this->token);
        $client = new Client();
        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Apikey' => config('tbc.api_key'),
                ],
            ]);
        } catch (ClientException $exception) {
            $error = json_decode($exception->getResponse()->getBody());

            if (!isset($error->error_code)) {
                return $error;
            }

            abort($error->error_code, isset($error->error_message) ? $error->error_message : '');
        }

        return json_decode($response->getBody(),true);
    }


    protected function requestToken(string $token = null): string
    {
        if (!$token) {
            $request = self::token();

            if (isset($request->access_token)) {
                return $request->access_token;
            }
        }

        return $token;
    }

    public function logTransactionCreate(array $data)
    {
        TbcPayTransaction::create([
            'model_id' => $this->model_id,
            'model_type' => $this->model_type,
            'amount' => $data['amount'],
            'currency' => $this->currency,
            'status' => $data['status'],
            'pay_id' => $data['pay_id'],
            'payment_methods' => json_encode($this->payment_methods)
        ]);
    }
}
