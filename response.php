<?php


	include_once 'core.class.php' ;


	$param =  [ 

		'encrypt_method'=> 'AES-256-CBC',
		'secret_key'    => 'secret key' ,
		'secret_iv'     => 'secret iv'  ,
		'input'         => 'clFPVjEzblM0OU1FY0l3a2tBdk5UZz09', 	

	];


	$obj =  new CORE($param);

	echo $obj->DECRYPT();