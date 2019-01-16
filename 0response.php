<?php

	include_once 'view.class.php' ;
	include_once 'core.class.php' ;


	$url = [ 

		'url' => 'http:/localhost/0request.php'

	];
	$view = new VIEW($url);

	$options	= [ 

		'secret_key'    => '7iNShAeujO2arTiDjjEKhGnn3rIk02UARtvlEtjn6YhwnHkHN969cbYfo31qXYQG' ,
		'secret_iv'     => 'iVClHYrShtxUK9O59ZItjgdUnt7QlV3Ft4zrZfX6vKSHnteZKDKOVr1PD83vTrTX' ,
		'input'         => $view->RESPONSE(), 	

	];

	$core = new CORE($options);

	header('Content-Type: application/json');
	echo $core->DECRYPT();