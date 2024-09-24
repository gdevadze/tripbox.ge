<?php

namespace App\Services;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class GoogleMapService
{
    private $token = null;
    private $userId = null;
    public function __construct()
    {
        
    }
    
    public function geocodeAddress($address)
    {
        $apiKey = 'AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk';
        $client = new Client();

        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json', [
            'query' => [
                'address' => $address,
                'key' => $apiKey,
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        if ($data['status'] == 'OK') {
            $location = $data['results'][0]['geometry']['location'];
            return [
                'latitude' => $location['lat'],
                'longitude' => $location['lng']
            ];
        } else {
            return null;
        }
    }
    
    public function calculateDistance($origin, $destination,$distanceType = 'text', $mode = 'driving')
    {
        $apiKey = 'AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk';
        $client = new Client();
        
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/distancematrix/json', [
            'query' => [
                'units' => 'metric',
                'origins' => $origin,
                'destinations' => $destination,
                'mode' => $mode,
                'key' => $apiKey,
            ]
        ]);
        
        $data = json_decode($response->getBody(), true);
        // info($data);
        // return $data;
        // Check if response status is OK
        if ($data['status'] == 'OK') {
            $distance = 0;
            if(isset($data['rows'][0]['elements'][0]['distance'][$distanceType])){
                $distance = $data['rows'][0]['elements'][0]['distance'][$distanceType]; // Distance in meters
            }
            
            return $distance;
        } else {
            return "Error: Unable to calculate distance.";
        }
    }

    public function drivingDuration($origin,$destination)
    {
        $apiKey = 'AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk';
        $response = Http::get('https://maps.googleapis.com/maps/api/directions/json', [
            'origin' => $origin,
            'destination' => $destination,
            'key' => $apiKey,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $duration = $data['routes'][0]['legs'][0]['duration']['value'];
            return $duration;
        }

        return 0;
    }
    
    public function reverseGeocode($latitude,$longitude)
    {
        $apiKey = 'AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk';
        $client = new Client();

        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json', [
            'query' => [
                'latlng' => $latitude . ',' . $longitude,
                'key' => $apiKey,
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        if ($data['status'] == 'OK') {
            $address = $data['results'][0]['formatted_address'];
            return $address;
        } else {
            return response()->json(['error' => 'Geocoding failed'], 400);
        }
    }

}
