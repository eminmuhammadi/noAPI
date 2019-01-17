<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('Direct access not allowed'); exit();};
/**
 * 
*/
class DATA
{

		public function __construct(){

		/**
		 *    [IMPORTANT] CHECK STATUS SERVER
		 */





		}

		public function SEND($d){

			if((!isset($d)) || (empty($d))){
				die('ERROR DATA->SEND #: PARAMETRES NOT DEFINED');
			}
			
			else {

				if($d['method']=='request'){


					$c=new CONTROLLER($d['data']);
					$d['input']=$c->API();
				}

				else if($d['method']=='response'){


					$v=new VIEW($d['url']);
					$d['input']=$v->RESPONSE();
				}
				
				return $d;
			}

		}

}