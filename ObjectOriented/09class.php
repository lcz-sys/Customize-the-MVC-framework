<?php

// function __autoload($classname){
// 	echo $classname;
// 	// include_once $classname . '.php';
// }

function my_autoload($classname){
	echo $classname;
}

spl_autoload_register('my_autoload');

$s = new Saler();