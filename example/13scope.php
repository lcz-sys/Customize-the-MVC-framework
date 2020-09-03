<?php


$number = 100;

$_GET['age'] = 18;

function show(){
	$show = __FUNCTION__;

	// echo $number;

	echo $_GET['age'];

	var_dump($GLOBALS);
}

show();