<?php

abstract class Human{}

class Man extends Human{}


abstract class Animal{

	abstract public function eat();
}

abstract class Dog extends Animal{

}

class Cat extends Animal{

	public function eat(){
		echo 'eat','<br/>';
	}
}