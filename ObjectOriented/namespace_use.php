<?php

namespace space1;

class Man{
	public function __construct(){
		echo __METHOD__,'<br/>';
	}
}

function display(){
	echo __METHOD__,'<br/>';
}

const PI = 3.14;

namespace space2;

use \space1\Man;
use const \space1\PI;
use function \space1\display as d;

function display(){
	echo __METHOD__,'<br/>';
}

new Man;

echo PI,'<br/>';

display();

d();

phpinfo();