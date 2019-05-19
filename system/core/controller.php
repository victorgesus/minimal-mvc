<?php

abstract class Controller{

	function __construct(){
		require(__DIR__ . '/config/config.php');
	}
	
	/*
	|--------------------------------------------
	| REQUIRE METHOD
	|--------------------------------------------
	| An easy way to require files.
	| @usage:   $this->require('nameoffile');
	| @warning: File extension has to be .php, but you can change the method
	| as you wish. */

	function require($path){
		require ROOT . $path . '.php';
	}

	/*
	|--------------------------------------------
	| GET CLASS METHOD
	|--------------------------------------------
	| Another way to instantiate your classes.
	| @usage:   $this->get('nameofclass'); */

	function get($class){
		$class = new $class();
		return $class;
	}

	/*
	|--------------------------------------------
	| MODEL METHOD
	|--------------------------------------------
	| A method to load your models, make it easy to read the code. 
	| @usage:   $this->model('nameofthemodel'); */


	function model($path){
		require(ROOT . '/app/models/'. $path .'.php'); 
	}

	/*
	|--------------------------------------------
	| VIEW METHOD
	|--------------------------------------------
	| A method to load your views, make it easy to read the code. 
	| @usage:   $this->view('nameoftheview'); 
	| @warning: If you are using .html files or other extension, please
	| change the code below. */

	function view($path){
		require(ROOT . '/app/views/'. $path .'.php');
		echo '<br>';
	}

	/*
	|--------------------------------------------
	| ERROR_404 METHOD
	|--------------------------------------------
	| This method will be called if you access not defined routes.
	| @warning: You can rewrite this method to fit your needs. */

	function error_404(){
		require(ROOT . '/app/views/errors/error_404.php');
	}
}
