<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SpaceXController extends Controller
{
    public function getCompanyInfo() {
        $client = new Client();

        $headers = [
            'Content-type' => 'application/x-www-form-urlencoded'
        ];
        $url = "https://api.spacexdata.com/v4/company";
        $response = $client->request('GET', $url, 
        [
            'headers' => $headers
        ]);

        $result = $response->getBody();
        return $result;
    }
}
