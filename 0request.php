<?php

include_once 'controller.class.php' ;
include_once 'core.class.php' ;
include_once 'view.class.php' ;
include_once 'data.class.php' ;

$data = [

'secret_key'    => 'a' ,
'secret_iv'     => 'a' ,
'method' 		=> 'request',
'data'          => array(

	'MESSAGE_ONE' => 'SALAM',					   
	'MESSAGE_TWO' => 'NECESEN ?',					   
				   



)];

 
$core       = new CORE(CORE::SEND($data));


/** 
*  Header for Application
*/
header('Content-Type: text/plain');


/**
* 	Output API 
* 
*/	
echo $core->ENCRYPT();