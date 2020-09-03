<?php

class HuMan{
	protected function display(){
		$this->getMethod();
	}

	private function getMethod(){
		echo __METHOD__;
	}
}

class Man extends HuMan{
	public function getFather(){
		$this->display();
	}
}

$man = new Man;

$man->getFather();