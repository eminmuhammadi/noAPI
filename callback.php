<?php


	include_once 'controller.class.php' ;


	$param =  [ 

		'a1'  => 's1'

	];


	$obj =  new CONTROLLER($param);

	echo $obj->API();