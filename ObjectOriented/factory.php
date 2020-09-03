<?php

class Man{
	public function display(){
		ecjo '这是男人<br/>';
	}
}
class WoMan{
	public function display(){
		ecjo '这是女人<br/>';
	}
}
class ladyBoy{
	public function display(){
		ecjo '这是小孩<br/>';
	}
}

class HumanFactory{
	public static function getInstance($classname){
		return new $classname;
	}
}

$F = HumanFactory::getInstance('Man');

$F->display();