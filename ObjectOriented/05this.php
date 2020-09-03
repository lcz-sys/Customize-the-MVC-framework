<?php


class buyer{
	public $name = 'jim';
	protected $money = 100000000000;
	private $age = 20;

	public function getAll(){
		echo $this->name,$this->money,$this->age;
	}
}

$b = new buyer();

echo $b->getAll();