<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, ,DELETE , PUT , OPTIONS");


include_once 'controller.class.php' ;
include_once 'core.class.php' ;
include_once 'view.class.php' ;

$data = [

'secret_key'    => 'I_AM_SECRET_KEY' ,
'secret_iv'     => 'I_AM_SECRET_IV'  ,
'method' 		=> 'response',
'url' 			=> 'http://localhost/0request.php'

];

 
$core       = new CORE(CORE::SEND($data));

/** 
*  Header for Application
*/
header('Content-Type: text/json');


/**
* 	Output API 
* 
*/	
echo $core->DECRYPT();