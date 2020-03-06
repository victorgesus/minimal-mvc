<?php

spl_autoload_register('Autoload::Controllers');
spl_autoload_register('Autoload::Core');
spl_autoload_register('Autoload::Models');

class Autoload{

	public static function controllers($class){
		$file = ROOT . '/app/controllers/'. $class . '.php';
		if(file_exists($file))
			require_once $file;
	}

	public static function models($class){
		$file= ROOT . '/app/models/'. $class . '.php';
		if(file_exists($file))
			require_once $file;
	}
	public static function core($class){
		$file= ROOT . '/system/core/'. $class . '.php';
		if(file_exists($file))
			require_once $file;
	}
}
