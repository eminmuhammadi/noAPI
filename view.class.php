<?php

/**
 * 
*/


class VIEW
{
		
		public function __construct($o){

			if((!isset($o)) || (empty($o))){
				return 'View Parametrs are missed.' ;
			}
			
			else {

				$this->param=$o;
				return true;
			}


		}


		public function RESPONSE(){

		if(!isset($this->param['url'])){
			return 'Url not defined';
		}
			
			$curl = curl_init();

				curl_setopt_array($curl, array(
 					CURLOPT_URL => $this->param['url'],
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "gzip",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_SSL_VERIFYPEER => false,
  					CURLOPT_SSL_VERIFYHOST => false ,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "GET",
				));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
 				return false;
			} 

			else {
  				return $response;
			

			}
   			
		}






}