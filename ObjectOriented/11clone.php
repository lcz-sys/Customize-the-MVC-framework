<?php

class Saler{
	public $name;
	private $money = 100000;

	public function __clone(){
		var_dump($this);
		
	}
}

$s1 = new Saler();

$s2 = clone $s1;

var_dump($s1,$s2);