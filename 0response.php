<?php

include_once 'controller.class.php' ;
include_once 'core.class.php' ;
include_once 'view.class.php' ;

$data = [

'secret_key'    => 'a' ,
'secret_iv'     => 'a' ,
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