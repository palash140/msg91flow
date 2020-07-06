<?php

namespace MSG91\Flow\Services;

use MSG91\Flow\Libs\MSG91Lib;

class MSG91Flow{
    protected  $lib;
    function __construct(MSG91Lib $lib){
        $this->lib=$lib;
    }

    function createFlow(){
       return $this->lib->createFlow();
    }
}

