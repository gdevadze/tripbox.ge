<?php

namespace App\Services;
use App\Models\SmsHistory;
use Auth;


class MessageService 
{
  
    public function smsBalance()
    {
        $key = "cf749f8d55974144b4bceca232f0017e";
        $url= "https://smsoffice.ge/api/getBalance?key=".$key;
        return $response = file_get_contents($url);
        return 0;
    }
  
  	function get_data($url) 
    { 
         
         return $data; 
    }

    public function sms($phone, $sender = 'Tripbox.ge', $text)
    {
      	//return urlencode($text);
      	$ch = curl_init();
     	//$apiKey = config('smsoffice.key');
      	$apiKey = "cf749f8d55974144b4bceca232f0017e";
      	$reference = uniqid('PER-');
        curl_setopt($ch, CURLOPT_URL, 'https://smsoffice.ge/api/v2/send/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "key=$apiKey&sender=$sender&destination=$phone&content=$text&reference=$reference&urgent=true");
        
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $response = curl_exec($ch);

        curl_close($ch);
        $response = json_decode($response, true);
      	// info($response);
      	if(isset($response['Success']) && $response['Success'] == 'true' && $response['ErrorCode'] == 0){
          	preg_match_all('!\d+!', $phone, $matches);
                $to = implode($matches[0]);

                if (substr($to, 0, 3) != '995') {
                    $to = '995' . $to;
                }
      		    SmsHistory::create([
                    'phone' => $to,
                    'reference' => $reference,
                  	'message_text' => $text
                ]);

                return true;
        }
    }
    
    function errorSendTelegram($exception)
    {
        $botToken = '1290501868:AAEHh4XABNQKrzs2y4yyf5pItRBiy0yDbgc';
        $website = "https://api.telegram.org/bot" . $botToken;
        $params = [
            'chat_id' => 995786504,
            'text' => "PER Checking: $exception",
        ];
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_exec($ch);
        curl_error($ch);
        curl_close($ch);
    }
    
    public function smsMsgGroup($phone, $text)
    {
        $this->sms($phone,'P-POST',$text);
    }

    public function verificationSms($user)
    {
        $user->generatePhoneVerificationOneTimeCode();
        $text = "რეგისტრაციის ერთჯერადი კოდი: ".$user->phone_one_time_code;
        $this->smsMsgGroup($user->phone, $text);
        //$this->email($user->email, "giogroup@giogroup.ge", $text);
    }
  
  	public function verificationSmsAdmin()
    {
      	$user = Auth::guard('admin')->user();
        $user->generatePhoneVerificationOneTimeCode();
        $text = "ავტორიზაციის კოდი: ".$user->phone_one_time_code;
        $this->smsMsgGroup($user->phone, $text);
        //$this->email($user->email, "giogroup@giogroup.ge", $text);
    }

    public function verificationEmail($user)
    {
        $user->generateEmailVerificationOneTimeCode();
        $text = "რეგისტრაციის ერთჯერადი კოდი: ".$user->email_one_time_code;
        //$this->sms($user->phone, "GIOGROUP.GE", $text);
        $this->email($user->email, "no-reply@personalpost.ge", $text);
    }

    public function email($email, $sender, $text)
    {
        
            return \Mail::send('vendor.send_email',
             array(
                 'text' => $text,
             ), function($message) use ($sender, $email)
               {
                  $message->from($sender, env('APP_NAME'));
                  $message->subject('TRIPBOX.GE');
                  $message->to($email);
               });
        
    }

    public function bookingFormEmail($email,$subject, $data)
    {
        
            return \Mail::send('vendor.booking_form',
             array(
                 'data' => $data,
             ), function($message) use ($subject, $email)
               {
                  $message->from('no-reply@tripbox.ge', env('APP_NAME'));
                  $message->subject($subject);
                  $message->to($email);
               });
        
    }

}