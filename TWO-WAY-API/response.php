<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, ,DELETE , PUT , OPTIONS");

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/vendor/autoload.php');

$data = [

/* Authentication */
'username'      => 'username',
'password'      => 'password',

/* Keys */
'secret_key'    => 'I_AM_SECRET_KEY' ,
'secret_iv'     => 'I_AM_SECRET_IV'  ,

/* Method */
'method' 		=> 'response',

/* Url */
'url' 			=> 'http://localhost/TWO-WAY-API/request.php'

];

 
$core       = new CORE(CORE::SEND($data));

/**
 *  If authentication required use it
 */
$core->AUTH($data['username'],$data['password']);


/** 
*  Header for Application
*/
header('Content-Type: application/json');


/**
* 	Output API 
* 
*/	
echo $core->DECRYPT();