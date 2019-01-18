<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, ,DELETE , PUT , OPTIONS");


include_once 'src/controller.class.php' ;
include_once 'src/core.class.php' ;
include_once 'src/view.class.php' ;

$data = [

/* Authentication */
'username'      => 'username',
'password'      => 'password',

/* Keys */
'secret_key'    => 'I_AM_SECRET_KEY' ,
'secret_iv'     => 'I_AM_SECRET_IV' ,

/* Method */
'method' 		=> 'request',

/* Data */
'data'          => array(

	'#0' => 'Hi',					   
	'#1' => 'How are you ?',
)];

 
$core       = new CORE(CORE::SEND($data));
/**
 *  Authentication (not required yet)
 */
$core->AUTH($data['username'],$data['password']);

/** 
*  Header for Application
*/
header('Content-Type: text/plain');


/**
* 	Output API 
* 
*/	
echo $core->ENCRYPT();