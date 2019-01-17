<?php 
	/* Controller class  
	 * Made by davelee (davelee@seouleaguer.net) 
	 * Version 1.1 (date: Jan 16 12:16 KRT 2019)
	*/
class DL_Controller {

	//private static $instance;		// idk why it exists

	public function DL_Controller() {		// class constructor 
		echo "DL_Controller's constructor";	// test message
	}

	public function get() {		// get method load in url
		echo "DL_Controller's function get called."; 	// test message
	}

	public function view($param) {	// ex) $this->load->view('welcome_message.php');
		echo "function view call in DL_Controller" . "<br><br>";
		$fileName = $param;
		require_once($_SERVER["DOCUMENT_ROOT"] . '/application/views/' . $fileName . '.php'); 
	}
 
}

?>