<?php

/**
 * 
 */
class Singleton
{
	private static $object = null;
	
	private function __construct()
	{
		echo __METHOD__,'<br/>';
	}

	public static function getInstance(){

		if(!(self::$object instanceof self)){
			self::$object = new self();
		}
		return self::$object;
	}

	private function __clone(){

	}
}

// $s1 = new Singleton();
// $s2 = new Singleton();

Singleton::getInstance();