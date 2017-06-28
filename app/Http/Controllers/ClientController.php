<?php

namespace HttpClient\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use HttpClient\Http\Requests;

class ClientController extends Controller
{
    //Request To API
    protected function performRequest($method, $url, $parameters = [])
    {
      $client = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert.pem') ]]);
      $response = $client->request($method, $url, $parameters);
      return $response->getBody()->getContents();
    }

    //GET Token
    protected function obtainAccessToken()
    {
      $grantType = config('api.grant_type');
      $clientId = config('api.client_id');
      $clientSeret = config('api.client_secret');

      $contents = $this->performRequest('POST','https://lumenapi.juandmegon.com/oauth/access_token',[
        'form_params' => [
          'grant_type' => $grantType,
          'client_id' => $clientId,
          'client_secret' => $clientSeret,
        ]
      ]);
      $decodedContents = json_decode($contents);
      $accessToken = $decodedContents->access_token;
      return $accessToken;
    }

    //Authorization
    protected function performAuthorizedRequest($method, $url, $formParameters = [])
    {
        $requestParameters['form_params'] = $formParameters;

        $accessToken = 'Bearer ' . $this->obtainAccessToken();

        $requestParameters['headers']['Authorization'] = $accessToken;

        return $this->performRequest($method, $url, $requestParameters);
    }

    // POST
    protected function performPostRequest($url, $parameters = [])
    {
      $contents = $this->performAuthorizedRequest('POST', $url, $parameters);
      $decodedContents = json_decode($contents);
      return $decodedContents->data;
    }

    //GET
    protected function performGetRequest($url)
    {
        $contents = $this->performRequest('GET', $url);
        $decodedContents = json_decode($contents);
        return $decodedContents->data;
    }
    //update
    protected function performPutRequest($url, $parameters)
    {
      $contents = $this->performAuthorizedRequest('PUT', $url, $parameters);
      $decodedContents = json_decode($contents);
      return $decodedContents->data;
    }

    //delete
    protected function performDeleteRequest($url, $parameters = [])
    {
      $contents = $this->performAuthorizedRequest('DELETE',$url, $parameters);
      $decodedContents = json_decode($contents);
      return $decodedContents->data;
    }




    // Function for students
    protected function obtainAllStudents()
    {
      return $this->performGetRequest('https://lumenapi.juandmegon.com/students');
    }
    protected function obtainOneStudent($studentId)
    {
      return $this->performGetRequest("https://lumenapi.juandmegon.com/students/{$studentId}");
    }

    protected function createOneStudent($parameters)
    {
      return $this->performPostRequest('https://lumenapi.juandmegon.com/students', $parameters);
    }

    protected function updateOneStudent($parameters)
    {
      $studentId = $parameters['id'];
      return $this->performPutRequest("https://lumenapi.juandmegon.com/students/{$studentId}", $parameters);
    }

    protected function removeOneStudent($parameters)
    {
      $studentId = $parameters['id'];
      return $this->performDeleteRequest("https://lumenapi.juandmegon.com/students/{$studentId}");
    }


    // Function for teachers
    protected function obtionAllTeachers()
    {
      return $this->performGetRequest('https://lumenapi.juandmegon.com/teachers');
    }
    protected function obtainOneTeacher($teacherId)
    {
      return $this->performGetRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}");
    }

    protected function createOneTeacher($parameters)
    {
      return $this->performPostRequest('https://lumenapi.juandmegon.com/teachers', $parameters);
    }

    protected function updateOneTeacher($parameters)
    {
      $teacherId = $parameters['id'];
      return $this->performPutRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}",$parameters);
    }

    protected function removeOneTeacher($parameters)
    {
      $teacherId = $parameters['id'];
      return $this->performDeleteRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}");
    }

    // Function for courses
    protected function obtionAllCourses()
    {
      return $this->performGetRequest('https://lumenapi.juandmegon.com/courses');
    }
    protected function obtainOneCourses($coursesId)
    {
      return $this->performGetRequest("https://lumenapi.juandmegon.com/courses/{$coursesId}");
    }
}
