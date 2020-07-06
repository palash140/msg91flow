<?php

namespace  MSG91;

use MSG91\Flow\Services\MSG91Flow;

class  MSG91{
    protected $flow;

    public function __construct(MSG91Flow $flow){
        $this->flow=$flow;
    }

    public function createFlow(){
        var_dump($this->flow->createFlow());
    }

}
