<?php

class buyer{
	public $name = 'sss';
	protected $money = 100000000000;
	private $age = 20;

	public function getMoney(){
		echo $this->money;
	}
}

$b = new buyer();
echo $b->name;
echo $b->getMoney();
// echo $b->age;