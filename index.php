<?php

use MSG91\MSG91;

ini_set('display_errors',1);
require_once __DIR__ . '/vendor/autoload.php';

define('MSG91_KEY','90027A6CjQspCkQcr5cd432e7');
$instance = new MSG91();
$input=array(
 'input '   =>'hey this is input'
);
$res=$instance->createFlow($input);

var_dump($res);

