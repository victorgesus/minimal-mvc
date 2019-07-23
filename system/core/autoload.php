<?php

spl_autoload_register('Autoload::Controllers');
spl_autoload_register('Autoload::Core');
spl_autoload_register('Autoload::Model');

class Autoload{

	public static function controllers($class){
		$file = ROOT . '/app/controllers/'. $class . '.php';
		if(file_exists($file))
			require_once $file;
	}

	public static function model($class){
		$file= ROOT . '/app/model/'. $class . '.php';
		if(file_exists($file))
			require_once $file;
	}
	public static function core($class){
		$file= ROOT . '/system/core/'. $class . '.php';
		if(file_exists($file))
			require_once $file;
	}
}
