<?php

class Buyer{
	public $name;
	public $money = 0;
}

$b = new Buyer();

echo $b->money;

echo '<br/>';

$b->money = 100000000;

echo $b->money;