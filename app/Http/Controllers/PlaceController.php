<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PlaceController extends Controller
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = 'AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk';
    }

    public function index()
    {
        return view('places.index');
    }

    public function search(Request $request)
    {
        $location = $request->input('location');
        $client = new Client();

        try {
            // Geocode the location to get coordinates
            $response = $client->get('https://maps.googleapis.com/maps/api/geocode/json', [
                'query' => [
                    'address' => $location,
                    'key' => $this->apiKey,
                ],
            ]);
            $data = json_decode($response->getBody()->getContents(), true);

            if ($data['status'] === 'OK' && isset($data['results'][0]['geometry']['location'])) {
                $locationCoords = $data['results'][0]['geometry']['location'];

                // Search for nearby attractions
                $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
                    'query' => [
                        'location' => $locationCoords['lat'] . ',' . $locationCoords['lng'],
                        'radius' => 5000, // Adjust radius as needed
                        'type' => $request->input('type') ?? 'tourist_attraction',
                        'key' => $this->apiKey,
                    ],
                ]);
                $places = json_decode($response->getBody()->getContents(), true);

                return response()->json($places['results']);
            } else {
                return response()->json(['error' => 'Location not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function details($placeId)
    {
        $client = new Client();

        try {
            // Get place details
            $response = $client->get('https://maps.googleapis.com/maps/api/place/details/json', [
                'query' => [
                    'place_id' => $placeId,
                    'fields' => 'name,formatted_address,geometry,rating,website,photos,reviews',
                    'key' => $this->apiKey,
                ],
            ]);
            $placeDetails = json_decode($response->getBody()->getContents(), true);
            return response()->json($placeDetails['result']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function photo($placeId, $photoReference)
    {
        $client = new Client();

        try {
            $response = $client->get('https://maps.googleapis.com/maps/api/place/photo', [
                'query' => [
                    'maxwidth' => 800,
                    'photoreference' => $photoReference,
                    'key' => $this->apiKey,
                ],
            ]);

            return response()->stream(function () use ($response) {
                echo $response->getBody();
            }, 200, [
                'Content-Type' => $response->getHeader('Content-Type')[0],
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
