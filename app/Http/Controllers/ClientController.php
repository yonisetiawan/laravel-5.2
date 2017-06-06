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
      return $response->getBody()->getContents();
    }

    protected function performGetRequest($url)
    {
        $contents = $this->performRequest('GET', $url);
        $decodedContents = json_decode($contents);
        return $decodedContents->data;
    }

    // Function for students
    protected function obtainAllStudents()
    {
      return $this->performGetRequest('https://lumenapi.juandmegon.com/students');
    }


    // Function for teachers
    protected function obtionAllTeachers()
    {
      return $this->performGetRequest('https://lumenapi.juandmegon.com/teachers');
    }

    // Function for courses
    protected function obtionAllCourses()
    {
      return $this->performGetRequest('https://lumenapi.juandmegon.com/courses');
    }
}
