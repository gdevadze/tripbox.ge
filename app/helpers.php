<?php

use App\Models\GeneralSetting;
use App\Models\Order;
use App\Models\Car;
use App\Services\GoogleMapService;
use App\Services\GpsService;

define('TRANSL_FROM_LATIN', 1);
define('TRANSL_TO_LATIN', 2);

if (!function_exists('jsonResponse')) {
    function jsonResponse($data = [], int $status = 200,$headers = [],$options = JSON_UNESCAPED_UNICODE)
    {
        return response()->json($data, $status,$headers,$options);
    }
}

if (!function_exists('currentUser')) {
    function currentUser(){
        return optional(auth() -> user());
    }
}

if (!function_exists('getTrx')){
    function getTrx($length = 12)
    {
        $characters = 'ABCDEFGHJKMNOPQRSTUVWXYZ123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (!function_exists('apiUser')) {
    function apiUser(){
        return optional(auth()->user());
    }
}

if (!function_exists('getTripadvisorPhoto')) {
    function getTripadvisorPhoto($locationId){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.content.tripadvisor.com/api/v1/location/'.$locationId.'/photos?key=20A5BA198F714ED2BBC2F46CB1A9B598&language=en',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        
        if(!isset(json_decode($response,true)['data'])){
            return [];    
        }
        $locationImages = json_decode($response,true)['data'];
        return $locationImages;
    }
}

if (!function_exists('carRentalCalculation')) {
    function carRentalCalculation($locationFrom,$gpsCarId,$carId){
        $googleMapService = new GoogleMapService();
        // $gpsService = new GpsService();
        $deliveryCost = 0;
        $pricePerKm = 0.4;
        $location = $googleMapService->geocodeAddress($locationFrom);
        $deliveryAddress = implode(',',$location);
        if($gpsCarId){
            $car = Car::findOrFail($carId);
            // $carCoordinates = $gpsService->car($gpsCarId);
            $carCorrdinatesStr = $car->latitude.','.$car->longitude;
        }else{
            $car = Car::findOrFail($carId);
            $carCoordinates = $googleMapService->geocodeAddress($car->address);
            $carCorrdinatesStr = implode(',',$carCoordinates);
        }
        
        // $deliveryAddress = $request->lat.','.$request->lng;
        $distanceCityFromAndCar = $googleMapService->calculateDistance($carCorrdinatesStr,$deliveryAddress,'value');
        if($distanceCityFromAndCar > 2000){
            $deliveryCost = ($distanceCityFromAndCar * 0.001) * $pricePerKm;
        }
        return ['distance' => $distanceCityFromAndCar,'delivery_cost' => number_format(ceil($deliveryCost),2)];
    }
}

if (!function_exists('birthdateDay')) {
    function birthdateDay($birthdate){
        $today = \Carbon\Carbon::today()->format('m-d');
        $birthdate = \Carbon\Carbon::parse($birthdate)->format('m-d');
        if ($today == $birthdate){
            return 'დღეს';
        }else{
            return 'ხვალ';
        }
    }
}

if (!function_exists('isGeorgianText')){
    function isGeorgianText($text) {
        // Regular expression pattern for Georgian characters
        $pattern = '/^[\x{10A0}-\x{10FF}\x{1C90}-\x{1CBF}\x{2D00}-\x{2D25}\x{2D27}\x{2D2D}\s]+$/u';

        // Test if the text matches the pattern
        return preg_match($pattern, $text);
    }
}

if (!function_exists('generalSetting')) {
    function generalSetting($key){
        $generalSetting = GeneralSetting::all()->keyBy('key');
        return $generalSetting[$key]->value;
    }
}

if (!function_exists('currentLocale')) {
    function currentLocale(){
        return app()->currentLocale();
    }
}

if (!function_exists('getMonthName')){
    function getMonthName($monthKey){
        $converted = str_pad($monthKey, 2, '0', STR_PAD_LEFT);
        $months = [
            '01' => 'იანვარი',
            '02'=>'თებერვალი',
            '03'=>'მარტი',
            '04'=>'აპრილი',
            '05'=>'მაისი',
            '06'=>'ივნისი',
            '07'=>'ივლისი',
            '08'=>'აგვისტო',
            '09'=>'სექტემბერი',
            '10'=>'ოქტომბერი',
            '11'=>'ნოემბერი',
            '12'=>'დეკემბერი'
        ];
        return $months[$converted];
    }
}

if (!function_exists('durationStr')){
    function durationStr($duration){
        switch ($duration) {
            case 1:
                return '24 საათი';
            case 7:
                return '1 კვირა';
            case 14:
                return '2 კვირა';
            case 30:
                return '1 თვე';
            case 90:
                return '3 თვე';
            case 180:
                return '6 თვე';
            case 365:
                return '12 თვე';
            default:
                return $duration.' დღე';
        }
    }
}

if (!function_exists('localeUrl')) {
    function localeUrl($locale){
        $requestUri = request()->getRequestUri();
        $parsedRequestUri = explode('/',$requestUri);
        array_shift($parsedRequestUri);
        $parsedRequestUri[0] = $locale;
        return implode('/',$parsedRequestUri);
    }
}

if (!function_exists('generateCode')){
    function generateCode($length){
        $permitted_chars = '0123456789';
        return substr(str_shuffle($permitted_chars), 0, $length);
    }
}

if (!function_exists('errorSendTelegram')){
    function errorSendTelegram($exception)
    {
        $botToken = '1290501868:AAEHh4XABNQKrzs2y4yyf5pItRBiy0yDbgc';
        $website = "https://api.telegram.org/bot" . $botToken;
        $params = [
            'chat_id' => 995786504,
            'text' => "Olympia: $exception",
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
}

if (!function_exists('getUserCount')) {
    function getUserCount(){
        $userCount = \App\Models\User::whereNotIn('id',[1])->get()->count();
        return $userCount;
    }
}

if (!function_exists('getCarsCount')) {
    function getCarsCount(){
        $carsCount = \App\Models\Car::all()->count();
        return $carsCount;
    }
}

if(!function_exists('translit')) {
    function translit($str, $mode = TRANSL_TO_LATIN)
    {
        $converter = array(
            'ა' => 'a',
            'ბ' => 'b',
            'გ' => 'g',
            'დ' => 'd',
            'ე' => 'e',
            'ვ' => 'v',
            'ზ' => 'z',
            'თ' => 't',
            'ი' => 'i',
            'კ' => 'k',
            'ლ' => 'l',
            'მ' => 'm',
            'ნ' => 'n',
            'ო' => 'o',
            'პ' => 'p',
            'ჟ' => 'zh',
            'რ' => 'r',
            'ს' => 's',
            'ტ' => 't',
            'უ' => 'u',
            'ფ' => 'p',
            'ქ' => 'q',
            'ღ' => 'g',
            'ყ' => 'k',
            'შ' => 'sh',
            'ჩ' => 'ch',
            'ც' => 'ts',
            'ძ' => 'dz',
            'წ' => 'ts',
            'ჭ' => 'ch',
            'ხ' => 'kh',
            'ჯ' => 'j',
            'ჰ' => 'h',
            //' ' => '-',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'io',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'y',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'h',
            'ц' => 'ts',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'sht',
            'ъ' => 'a',
            'ы' => 'i',
            'ь' => 'y',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya'
        );
        if ($mode == TRANSL_FROM_LATIN) {
            $converter = array_flip($converter);
        }
        return strtr(strtolower($str), $converter);
    }

}

if(!function_exists('sum_times')) {
    function sum_times(...$args) {
        foreach ($args as $time) {
            $timeArr = explode(':');

        }
        return collect($args)->map(fn ($time) => strtotime($time))->sum() / 1000 / 60 / 60;
    }
}

if (!function_exists('seconds2time')) {
    function seconds2time($totalSeconds)
    {
        $remains = $totalSeconds % 3600;
        $hours = str_pad((int)($totalSeconds / 3600),2,0,STR_PAD_LEFT);
        $minutes = str_pad((int)($remains / 60),2,0,STR_PAD_LEFT);
        $seconds = str_pad($remains % 60,2,0,STR_PAD_LEFT);
        return "{$hours}:{$minutes}:{$seconds}";
    }
}
