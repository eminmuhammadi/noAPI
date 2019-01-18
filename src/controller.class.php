<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('Direct access not allowed'); exit();};

/**
 *  @author  Emin Muhammadi muemin17631@sabah.edu.az
*/

class CONTROLLER
{
		
		public function __construct($o){

			if((!isset($o)) || (empty($o))){
					die('ERROR CONTROLLER #: PARAMETRES NOT DEFINED');
			}

			else {

				$this->param=$o;
				return true;
			}


		}


		public function API(){

			$s = self::Test();
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

				die('ERROR CONTROLLER->CHECK #: TYPE NOT DEFINED');

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

/**
 *   Test Service not work at the moment
 */
		public function Test(){

				if (1>0) { 

					return 'Y';
				}		
				else {

					return 'N';
				
				}

		}




}			