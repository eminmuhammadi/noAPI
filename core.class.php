<?php

/**
 * 
*/


class CORE
{
		
		public function __construct($o){

			if((!isset($o)) || (empty($o))){
				return 'Core Parametrs are missed.' ;
			}
			
			else {

				$this->param=$o;
				return true;
			}


		}

		public function ENCRYPT(){

			if ( 
					(!isset($this->param['encrypt_method'])) || 
					(!isset($this->param['secret_key'])) 	 || 
					(!isset($this->param['secret_iv']))  
				)
			{

				return 'Encryption Parametrs are missed.';
			}

			else {
				if (empty($this->param['input'])){

					return 'Encryption failed. Input is missed.'; 
				}
				else {

					$key    = hash('sha256', $this->param['secret_key']);
   					$iv     = substr(hash('sha256', $this->param['secret_iv']), 0, 16);
   					$output = openssl_encrypt($this->param['input'], $this->param['encrypt_method'], $key, 0, $iv);
        			$output = base64_encode($output);

        			return $output;

				}

			}

		}

		public function DECRYPT(){

			if ( 
					(!isset($this->param['encrypt_method'])) || 
					(!isset($this->param['secret_key'])) 	 || 
					(!isset($this->param['secret_iv']))  
				)
			{

				return 'Decryption Parametrs are missed.';
			}

			else {
				if (empty($this->param['input'])){

					return 'Encryption failed. Input is missed.'; 
				}
				else {

					$key    = hash('sha256', $this->param['secret_key']);
   					$iv     = substr(hash('sha256', $this->param['secret_iv']), 0, 16);
        			$output = openssl_decrypt(base64_decode($this->param['input']), $this->param['encrypt_method'], $key, 0, $iv);

        			return $output;
        		}	
			}

		}



}