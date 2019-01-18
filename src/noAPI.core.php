<?php

/**
 *  @author  Emin Muhammadi muemin17631@sabah.edu.az
*/

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('Direct access not allowed'); exit();};


class CORE
{

		public function __construct($o){

			if((!isset($o)) || (empty($o))){
				die('ERROR CORE #: PARAMETRES NOT DEFINED');
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

					die('ERROR CORE->ENCRYPT #: PARAMETRES NOT DEFINED (or AUTH failed)');

			}

			else {
				if (empty($this->param['input'])){

					die('ERROR CORE->ENCRYPT #: PARAMETRES NOT DEFINED (or AUTH failed)');
				}
				else {

					$key    = hash('sha256', $this->param['secret_key']);
   					$iv     = substr(hash('sha256', $this->param['secret_iv']), 0, 16);
   					$data   = openssl_encrypt($this->param['input'], "AES-256-CBC" , $key, 0, $iv);
        			$data   = base64_encode($data);

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

					die('ERROR CORE->DECRYPT #: PARAMETRES NOT DEFINED (or AUTH failed)');
			}

			else {
				if (empty($this->param['input'])){

					die('ERROR CORE->DECRYPT #: PARAMETRES NOT DEFINED (or AUTH failed)');
				}
				else {

					$key    = hash('sha256', $this->param['secret_key']);
   					$iv     = substr(hash('sha256', $this->param['secret_iv']), 0, 16);
        			$data   = openssl_decrypt(base64_decode($this->param['input']), "AES-256-CBC" , $key, 0, $iv);

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


					$v=new VIEW($d['url'],$d['username'],$d['password']);
					$d['input']=$v->RESPONSE();
				}

				else if($d['method']=='apiv1'){

					$c=new CONTROLLER($d['data']);
					return $c->API();
					 
				}
				
				return $d;
			}

		}

		public function AUTH($u,$p) {

				header('Cache-Control: no-cache, must-revalidate, max-age=0');

				$sc = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
				
				$auth = ( !$sc ||
						  $_SERVER['PHP_AUTH_USER'] != $u ||
						  $_SERVER['PHP_AUTH_PW']   != $p
						);

				if ($auth) {
								header('HTTP/1.1 401 Authorization Required');
								header('WWW-Authenticate: Basic realm="Access denied"');
				exit;
				}
		}


}