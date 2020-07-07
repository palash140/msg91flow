<?php

namespace MSG91\Services;

use MSG91\Libs\MSG91Lib;


class MSG91Flow{
    protected  $lib;
    function __construct(){
        $this->lib=new MSG91Lib();
    }

    function createFlow($input){
       return $this->lib->createFlow($input);
    }

    function updateFlow($input){
       return $this->lib->updateFlow($input) ;
    }

    function getFlows(){
        return $this->lib->getFlows();
    }

    function getFlow($flowId){
       return $this->lib->getFlow($flowId);
    }

    function sendSMSViaFlow($input){
        return $this->lib->sendSMSViaFlow($input) ;
    }
}

