<?php

/**
 * 
*/


class CONTROLLER
{
		
		public function __construct($o){

			if((!isset($o)) || (empty($o))){
				return 'Controller Parametrs are missed.' ;
			}
			
			else {

				$this->param=$o;
				return true;
			}


		}


		public function API(){

			$s = self::Test();
			header('Content-Type: application/json');
			header('HTTP/1.1 '.self::CHECK('s'));

			$j['status']  = self::CHECK('s');
			$j['message'] = self::CHECK('m');

			if($s == 'Y'){

				$j['data']    = $this->param;
			}


			return json_encode($j);

		}


		public function CHECK($t){

			if(!isset($t)){

				return 'Status type missed.';

			}

			else { 
					$s = self::Test();
					if($s == 'Y') {

							if($t=='s'){
								return '200';
							}
							if($t=='m'){
								return 'Successful';
							}							

					}
					if($s == 'N') {

							if($t=='s'){
								return '400';
							}
							if($t=='m'){
								return 'Bad Request';
							}							


					}

			}
		}


		public function Test(){

				$a='1';
				$b='2';

				
				if ($a<$b){


					return 'Y';

				}
				else {


					return 'N';
				
				}

		}

}			