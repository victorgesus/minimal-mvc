<?php

class App{

	function __construct(){

		require(__DIR__ . '/core/config/config.php');
		require(__DIR__ . '/core/config/routes.php');

		define("URI", $_SERVER['REQUEST_URI']);
		define("ROOT", $_SERVER['DOCUMENT_ROOT'] . '/'. $this->config['folder']);

		require(__DIR__ . '/core/autoload.php');
		require(__DIR__ . '/core/controller.php');
		require(__DIR__ . '/core/router.php');
	}

	function start(){
	
		$route = explode('/',URI);
		$index = explode('/', $this->config['index']);

		if(empty($this->config['folder'])){$first = '1'; $second = '2';}
		else{$first = '2'; $second = '3';}

		
		if(empty($route[$first]) or $route[$first]=='index.php'){
			$method = $index[1];
			$home=new $index[0]();
			$home->$method();
		}
		else{
			$router = new router(); 
			$router->request($route, $first, $second);
		}
	}
}
