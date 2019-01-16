<?php

	include_once 'controller.class.php' ;
	include_once 'core.class.php' ;


	$data = [ 

		'UkMs1sXHQimBxOvB'  => 'w4W6SFtlCYGPyK6p',
		'r2o9cetNCX3HUlXe'  => 'gUf3EHPAshd0W4mc',
		'nCCX2lbf2cehnLVb'  => 'WMiTydEjZPaD3i16',
		'PeB3sKQ9LUS5vqUH'  => '8qs3bSu8TSvhyl1K',
		'fGfnZWHenbyxkhfh'  => 'xLy33OCPmw0XlQPY',
		'tlfMJ3bsceyVT9Z3'  => '6FiPjZvCl3gGL8HX',
		'HJ66exlypSR8PVq5'  => 'uzrn6QlRCSxh1Onp',
		'CI4ffVRohgRpcKDh'  => 'CWVY9y6IGuEiuBUl',
		'PTJIShDv1dPj1Hk9'  => 'DHkFZhZICSwOeraf',
		'RRGY42r2QrBSfRAD'  => 'tkNGhdIuTMGlQkc0',
		'20NX7JgG8uTFcVnx'  => '26458Ox3zE6LOBeq',
		'mUjeQsZlo3F5pagQ'  => 'ibrulKoJc4rqvxUY',
		'dwQJ8Jujikw5f7Zg'  => 'r8ECfTApvjIGS2oh',
		'TJAtD8E2gVmzbAPC'  => 'TVFSPJF9VmjtuYtN',
		'FVoSm7SNsEug22GD'  => 'mXUmn4v2yN08569H',
		'UkMs1sXHQimBxOvB'  => 'tgxu0kvnd9F2hdJP',
		'fxxvCCMw5G3uzuZS'  => 'BJ10uyU6Gpvb48ZM',
		'r8Zj6T6UzfkReOYS'  => 'KdIotVuYttAGnPQB',
		'YjRcVGVtxpLNNnZz'  => 'pxdhZSfQO3xzvKnC',
		'Yn44Bc7qYh53ZR6k'  => 'B9nID9BiRxnlERi8',
		'YhRVFEWwfAViLKz7'  => 'HbXymJlG14dpIXYA',
		'hYfiJqAxwYsYOkOe'  => 'aHTPwMLueKlgP8iw',
		'CfMKQ9QsNEOhZS8c'  => '0jUrDFYFTVnS6ASo',
		'EVJppcg1FZFPcj39'  => 'oMpsGGcV2avVOJca',
		'TQm3z4V3mOaibvQq'  => 'NCeMPZP2anB8Co0E',
		'f0EZFjoEMrwEGcrl'  => 'yW5CVKyKOWqeKBPl',

	];
	$controller = new CONTROLLER($data);

	$options	= [ 
		
		'secret_key'    => '7iNShAeujO2arTiDjjEKhGnn3rIk02UARtvlEtjn6YhwnHkHN969cbYfo31qXYQG' ,
		'secret_iv'     => 'iVClHYrShtxUK9O59ZItjgdUnt7QlV3Ft4zrZfX6vKSHnteZKDKOVr1PD83vTrTX' ,
		'input'         => $controller->API(), 	

	];

	$core = new CORE($options);


	header('Content-Type: text/plain');
	echo $core->ENCRYPT();