<?php

class Router extends Controller{
	
	function __construct(){
		require(__DIR__ . '/config/routes.php');
		require(__DIR__ . '/config/config.php');
	}

	/*
	|----------------------------------------------
	| REQUEST METHOD
	|----------------------------------------------
	| Verify if the route is /thisformat or /this/format */

	function request($route){

		if(!empty($route[3])){
			$url = $route[2] . '/' . $route[3];
			$this->load_route($url);
		}
		else{
			$url = $route[2];
			$this->load_route($url);
		}
	}

	/*
	|----------------------------------------------
	| LOAD_ROUTE METHOD
	|----------------------------------------------
	| Verify if the route is listed on routes.php */

	function load_route($url){
		
		$route_list = $this->routes;
	
		if(isset($route_list[$url])){
			$dest = explode('/', $route_list[$url]);
			$this->check_controller($dest);
		}
		else{
			$this->error_404();
		}
	}

	/*
	|----------------------------------------------
	| CHECK_CONTROLLER METHOD
	|----------------------------------------------
	| Check if controller and method exists. */

	function check_controller($dest){
	
		$file =  ROOT . '/app/controllers/' . $dest[0] . '.php';

		if(file_exists($file)){
			$controller = new $dest[0];
			$method = $dest[1];
		
			if(method_exists($controller, $method))
				$controller->$method();
			else
				$this->error_404();
		}
		else{
			$this->error_404();
		}
	}
}
