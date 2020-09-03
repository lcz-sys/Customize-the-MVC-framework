<?php

interface Human{
	const NAME = '人';

	public function eat();

}


class Man implements Human{



	public function eat(){
		echo self::NAME;
	}
}

$man = new Man;

$man->eat();

abstract class Woman implements Human{}

interface Animal{}

interface Dog extends Animal{}

interface Ape extends Human,Animal{}