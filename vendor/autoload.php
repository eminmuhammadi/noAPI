<?php
	
	/**
	 *   noAPI
	 *
	 *	@author  Emin Muhammadi muemin17361@sabah.edu.az
	 *	@license https://github.com/eminmuhammadi/noAPI/blob/master/LICENSE MIT LICENSE
	 *	@version v1.0.0 noAPI - easly and secure create REST API using PHP. 
	 * 
	 */


	/**
	 *  Direct Access Block
	 */
	if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('Direct access not allowed'); exit();}


	/**
	 *  Classes
	 */
	function __autoload($c)	{
   		 require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/src/noAPI.'.$c.'.class.php');
	}