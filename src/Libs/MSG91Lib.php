<?php

namespace MSG91\Flow\Libs;


use GuzzleHttp\Client;

class MSG91Lib{

    function createFlow(){
        return $this->exec();
    }

    function  exec(){
        $httpClient= new Client();
        return $httpClient->request('GET','https://www.google.com');
    }
}
