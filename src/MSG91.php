<?php

namespace  MSG91;

use MSG91\Services\MSG91Flow;


class  MSG91{
    protected $flow;

    public function __construct(){

        if(!defined('MSG91_KEY')){
            define('MSG91_KEY','');
        }

        if(!defined('MSG91_ENV')){
            define('MSG91_ENV','staging');
        }

        $this->flow=new MSG91Flow;
    }

    public function createFlow($input){
        return $this->flow->createFlow($input);
    }

    function updateFlow($input){
        return $this->flow->updateFlow($input) ;
    }

    function getFlows(){
        return $this->flow->getFlows();
    }

    function getFlow($flowId){
        return $this->flow->getFlow($flowId);
    }

    function sendSMSViaFlow($input){
        return $this->flow->sendSMSViaFlow($input) ;
    }

}
