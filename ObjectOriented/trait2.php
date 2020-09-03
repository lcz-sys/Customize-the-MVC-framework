<?php

trait Eat{
	public function show(){
		echo 'Eat::show()<br/>';
	}
}

trait Go{
	public $name = 'Go';
	public function show(){
		echo 'Go::show()<br/>';
	}
}

class Man{
	use Eat,Go{
		// Go::show insteadof Eat;
		Eat::show insteadof Go;
		Go::show as shows;
	}
}

// $man = new Man;

// $man->show();
// $man->shows();

class Woman{
	use Go;

	public $age = 10;
	// public $name = '女人';

	public function show(){
		echo 'Woman::show()<br/>';
	}
}

// $woman = new Woman;

// $woman->show();

trait Walk{
	public function show(){
		parent::show();
		echo 'Walk::show()<br/>';
	}
}

class Human{
	public function show(){
		echo 'Human::show()<br/>';
	}
}

class son extends Human{
	use Walk;
}

// $son = new Son;

// $son->show();

/* self > trait > 父类 */

trait Test{
	public function show(){
		echo 'Test::show()<br/>';
	}
}

class Girl{
	use Test{
		show as protected pshow;
	}
}

$girl = new Girl;

$girl->show();
$girl->pshow();
