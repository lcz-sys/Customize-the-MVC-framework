<?php

trait Eat{
	public $time = 'sdsd';

	private $info;

	public function showTime(){
		echo $this->time;
	}
}

class Man{
	use Eat;
}

$man = new Man;
$man->showTime();