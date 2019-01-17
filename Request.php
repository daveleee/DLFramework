<?php 
	/* Request.php 
	* This file will contain a class for the Request class for initializing objects that contain information about the HTTP request.
	*/
	echo "<br>" . "Request.php";
 
	include_once 'IRequest.php';

	class Request implements IRequest {
		function __construct() {
	    	$this->bootstrapSelf();
	  	}

	  	private function bootstrapSelf() {		// A method that sets all keys in the global $_SERVER array as properties of the Request class and assigns their values as well.
	    	foreach($_SERVER as $key => $value) {				// foreach (X as Y => Z) ,,, 배열:X / 키:Y / 값:Z
	      		$this->{$this->toCamelCase($key)} = $value;
	    	}
	  	}

	  	private function toCamelCase($string) {		// 이 함수에서는 $_SERVER 의 key 값들을 전달받아서 CamelCase 화 시킨다. from snake_case.
	    	$result = strtolower($string);						// key 값들 전부 소문자화 
	        preg_match_all('/_[a-z]/', $result, $matches);
	    	
	    	foreach($matches[0] as $match) {
	        	$c = str_replace('_', '', strtoupper($match));
	        	$result = str_replace($match, $c, $result);
	    	}
	    	
	    	return $result;
	  	}

	  	public function getBody() {		// An implementation of the method defined in the IRequest interface.
	    	if($this->requestMethod === "GET") {
	      		return;
	    	}

	    	if ($this->requestMethod == "POST") {
	      		$result = array();
	      		
	      		foreach($_POST as $key => $value) {
	        		$result[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
	      		}
	      
	      		return $result;
	    	}
	    
	    	return $body;
	  	}
	}




?>