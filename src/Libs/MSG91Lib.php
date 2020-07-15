<?php

namespace MSG91\Libs;


use GuzzleHttp\Client;
use MSG91\Exceptions\InvalidMSG91KeyException;

class MSG91Lib{

    protected $key;
    protected $host;
    protected $endpoint;
    public function __construct(){
        $this->key=constant('MSG91_KEY');
        $env=constant('MSG91_ENV');
        $this->host=$env=='staging'?'https://test.msg91.com/':'https://api.msg91.com/';
    }

    function updateFlow($flowId,$data=array()){
        $this->endpoint='api/v5/flows/'.$flowId;
        return $this->exec($data);
    }

    function getFlows($data=array()){
        $this->endpoint='api/v5/flows';
        return $this->exec($data,'GET');

    }

    function sendSMSViaFlow($data=array()){
        $this->endpoint='api/v5/flow';
        return $this->exec($data);
    }

    function getFlow($flowId){
        $this->endpoint = 'api/v5/flows/'.$flowId;
        return $this->exec(array(),'GET');
    }

    function createFlow($data=array()){
        $this->endpoint='api/v5/flows';
        return $this->exec($data);
    }

    function  exec($data,$method='POST'){
        if(empty($this->key)){
            throw new InvalidMSG91KeyException('empty MSG91_KEY');
        }
        $httpClient= new Client(array(
            'http_errors'=>false
        ));

        $url=$this->host.$this->endpoint;
        $guzzleResponse=$httpClient->$method($url,array(
           'json'=>$data,
           'headers' => array(
               'Accept'=>'application/json',
               'authkey'=>$this->key
           )
        ));

        $res=array(
            'status' =>$guzzleResponse->getStatusCode(),
            'data'=>json_decode($guzzleResponse->getBody()->getContents())
        );
        return $res;
    }
}
