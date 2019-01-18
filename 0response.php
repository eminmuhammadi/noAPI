<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, ,DELETE , PUT , OPTIONS");


include_once 'src/controller.class.php' ;
include_once 'src/core.class.php' ;
include_once 'src/view.class.php' ;

$data = [

'username'      => 'username',
'password'      => 'password',

'secret_key'    => 'I_AM_SECRET_KEY' ,
'secret_iv'     => 'I_AM_SECRET_IV'  ,
'method' 		=> 'response',
'url' 			=> 'http://localhost/0request.php'

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