<?php

namespace HttpClient\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use HttpClient\Http\Requests;

class ClientController extends Controller
{
    protected function performRequest($method, $url, $parameters = [])
    {
      $client = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert.pem') ]]);
      $response = $client->request($method, $url, $parameters);
      return $response->getBody()->getContens();
    }

    protected function performGetRequest($url)
    {
        $this->performRequest('GET', $url);
        $decodedContents = json_decode($contents);
        return $decodedContents->data;
    }

    // Function for students
    protected function obtainAllStudents()
    {
      return $this->performGetRequest('https://lumenapi.juandmegon.com/students');
    }
}
