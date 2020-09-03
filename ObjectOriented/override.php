<?php

class Human{
	public static $name = 'Human';
	public static function show(){
		// echo __CLASS__,'<br/>';
		echo self::$name,'self<br/>';
		echo static::$name,'static<br/>';
	}
}

class Man extends Human{

	public static $name = 'man';

	// public function show(){
	// 	parent::show();
	// 	echo __CLASS__,'<br/>';
		
	// }
}

// $man = new Man;

// $man->show();

Man::show();