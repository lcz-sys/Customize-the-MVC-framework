<?php

class Autoload{
	public static function loadC($classname){
		$c_file = 'c/' . $classname . '.php';
		if(file_exists($c_file)) require_once $c_file;
	}
	public static function loadM($classname){
		$m_file = 'm/' . $classname . '.php';
		if(file_exists($m_file)) require_once $m_file;
	}
}

spl_autoload_register(array('Autoload','loadC'));
spl_autoload_register(array('Autoload','loadM'));

new Saler();