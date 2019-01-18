<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, ,DELETE , PUT , OPTIONS");

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/vendor/autoload.php');

$data = [

/* Method */
'method' 		=> 'apiv1',

/* Data */
'data'          => array(

	'#0' => 'Hi',					   
	'#1' => 'How are you ?',
)];

 
$core       = new CORE(CORE::SEND($data));

/** 
*  Header for Application
*/
header('Content-Type: application/json');

echo  $core->SEND($data);