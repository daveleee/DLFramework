<?php 
	/* Framework construction start page 
	 * Made by davelee (davelee@seouleaguer.net) 
	 * Version 1.2 (date: Jan 16 12:15 KRT 2019)
	 * reference - http://php.net/manual/kr/language.oop5.decon.php
	*/

	require_once($_SERVER["DOCUMENT_ROOT"] . '/system/Controller.php');		// In order to call DL_Controller class in system dir

	echo "topic.php in controllers directory!" . "<br>";
	echo "==================Result================";

	// Route::get('hello', function() {		// idea: Route 라는 클래스를 직접 만들어서 get 방식으로 uri routing 구현해보면 어떨까?
	// 	return 'hello!';
	// });

	$homeDir = '/var/www/html/';		// home folder path 
	$applicationDir = 'application';	// application folder path  
	$systemDir = 'system';				// system folder path 
	$testsDir = 'tests';				// tests folder path
  
/*
 * -------------------------------------------------------------------
 *  Set the main path 
 * -------------------------------------------------------------------
 */ 
	// Name of THIS file. In this file, it's welcome.php
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Current directory setting
	define('currentDir', dirname(__FILE__) . DIRECTORY_SEPARATOR);

	// Application directory setting
	define('applicationDir', $homeDir . $applicationDir . DIRECTORY_SEPARATOR);
	 
	// System directory setting
	define('systemDir', $homeDir . $systemDir . DIRECTORY_SEPARATOR);


	class Topic extends DL_Controller {		// class declaration
		public function Topic() {			// constructor definition 

			// DL_Controller::view('views');

 			// $this->get($id);
		}
		
		public function get($id) {		// get parameter thru the url
			echo "This is get function in Topic class." . $id;
			DL_Controller::get();
		}
	}

	$instance = new Topic();		// instance creation
	// $instance = new DL_Controller();
 
 

?>
