<?php

class Sale{
	private static $count = 0;

	private function __construct(){
		echo self::$count;
	}

	public static function getCon(){
		return new self();
	}
}

$s = Sale::getCon();

var_dump($s);