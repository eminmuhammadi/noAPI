<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('Direct access not allowed'); exit();};
/**
 * 
*/
class CORE
{

		public function __construct($o){

			if((!isset($o)) || (empty($o))){
				die('ERROR CORE #: PARAMETRES DEFINED');
			}
			
			else {

				$this->param=$o;
				return true;
			}


		}

		public function ENCRYPT(){

			if ( 
					(!isset($this->param['secret_key'])) 	 || 
					(!isset($this->param['secret_iv']))  
				)
			{

					die('ERROR CORE->ENCRYPT #: PARAMETRES NOT DEFINED');

			}

			else {
				if (empty($this->param['input'])){

					die('ERROR CORE->ENCRYPT #: PARAMETRES NOT DEFINED');
				}
				else {

					$key    = hash('sha256', $this->param['secret_key']);
   					$iv     = substr(hash('sha256', $this->param['secret_iv']), 0, 16);
   					$data = openssl_encrypt($this->param['input'], "AES-256-CBC" , $key, 0, $iv);
        			$data = base64_encode($data);

        			return $data;

				}

			}

		}

		public function DECRYPT(){

			if ( 
					(!isset($this->param['secret_key'])) 	 || 
					(!isset($this->param['secret_iv']))  
				)
			{

					die('ERROR CORE->DECRYPT #: PARAMETRES NOT DEFINED');
			}

			else {
				if (empty($this->param['input'])){

					die('ERROR CORE->DECRYPT #: PARAMETRES NOT DEFINED');
				}
				else {

					$key    = hash('sha256', $this->param['secret_key']);
   					$iv     = substr(hash('sha256', $this->param['secret_iv']), 0, 16);
        			$data = openssl_decrypt(base64_decode($this->param['input']), "AES-256-CBC" , $key, 0, $iv);

        			return $data;
        		}	
			}

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