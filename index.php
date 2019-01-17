<?php
	echo "This is a main page. Welcome!"."<br>";
?>
	<a href="test.php">Go on a test page to see the php information. </a>
	<br><br><br>
 
 

<?php
	echo "Framework Construction Start!"."<br>";
?>
	<a href="application/controllers/topic.php">Go to the Controllers/topic.php</a>
	<br><br><br>

<?php
 
	// Route::get('id', function($id) {
	// 	echo 'hello!!!' . $id;
	// });

	// echo call_user_func("strtoupper", "This is the test for router.") . "<br><br>";

	// public function getter($id) {
	// 	Route::get('id', function($id) {
	// 	echo 'HELLOWWW'	. $id;
	// 	});
	// }

?>

<?php 
	echo "================ URI Routing ================" . "<br>";  

	// include_once 'Request.php';
	// include_once 'Router.php';
	// $router = new Router(new Request);

	// $router->get('/', function() {
	// 	return "Hello Router world.";
	// });

	// $router->get('/profile', function($request) {
	// 	return "Profile";
	// });

	// $router->post('/data', function($request) {
	// 	return json_encode($request->getBody());
	// });

	$request = $_SERVER['REQUEST_URI'];  
	echo $request . '<br>';
 

	// $routes = [
	//     '/' => function() {
	//         // home page callback
	//     },
	//     'views' => ...
	// ];

	// $path = request_path();

	// if (isset($routes[$path]) AND is_callable($routes[$path])) {
	//     $routes[$path]();
	// }
	// else {
	//     echo "ERROR ERROR";
	// }


	// function request_path() {
	//     $request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
	//     $script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
	//     $parts = array_diff_assoc($request_uri, $script_name);
	    
	//     if (empty($parts)) {
	//         return '/';
	//     }
	    
	//     $path = implode('/', $parts);
	    

	//     if (($position = strpos($path, '?')) !== FALSE) {
	//         $path = substr($path, 0, $position);
	//     }

	//     return $path;
	// }


	// switch ($request) {
	// 	case '///':
	// 		require __DIR__ . '/application/views/views1.php';
	// 		break;

	// 	case '/views':
	// 		echo("<script>location.href='/application/views/viewsTest.php';</script>"); 
	// 		require __DIR__ . '/application/views/viewsTest.php';
	// 		break; 

	// 	default:
	// 		require __DIR__ . '/application/views/views2.php';
	// 		break;
	// }
 
 
 	// __autoload 
	function __autoload($className) {
		include $className . '.php';
	}
	$routes = new Routes();
	// $router = new Router();

?>