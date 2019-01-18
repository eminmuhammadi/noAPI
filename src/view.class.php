<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('Direct access not allowed'); exit();};

/**
 *  @author  Emin Muhammadi muemin17631@sabah.edu.az
*/

class VIEW
{
		
		public function __construct($o,$u,$p){

			if((!isset($o)) || (empty($o))){
				die('ERROR VIEW #: PARAMETRES NOT DEFINED');
			}

			else if((!isset($u)) || (empty($u))){
				die('ERROR VIEW #: USERNAME NOT DEFINED');
			}

			else if((!isset($p)) || (empty($p))){
				die('ERROR VIEW #: PASSWORD NOT DEFINED');
			}

			else {

				$this->param=$o;
				$this->user=$u;
				$this->pass=$p;
				return true;
			}


		}


		public function RESPONSE(){

		if(!isset($this->param)){
			die('ERROR VIEW->RESPONSE #: URL NOT DEFINED');
		}
			
			$curl = curl_init();

			$h = array(
    				'Content-Type:application/json',
   				    'Authorization: Basic '. base64_encode(md5($this->user).":".md5($this->pass))
			);

				curl_setopt_array($curl, array(
 					CURLOPT_URL => $this->param,
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "gzip , deflate",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_SSL_VERIFYPEER => false,
  					CURLOPT_SSL_VERIFYHOST => false,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "GET",
  					CURLOPT_HTTPHEADER => $h
				));

			$response = curl_exec($curl);
			$error    = curl_error($curl);

			curl_close($curl);

			if ($error) {
 				return false;
			} 

			else {
  				return $response;
			

			}
   			
		}

}