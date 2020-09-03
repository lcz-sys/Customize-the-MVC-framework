<?php

function getFood($connect,$food,$position){

	return $connect . $food . $position;
}

$zhangsan = getFood(515144,'tomato','shantou_xiashan');

var_dump($zhangsan);

function getMax($a,$b = 15,$c = 10){
	$a = $a > $b ? $a : $b;

	$a = $a > $c ? $a : $c;

	return $a;
}

var_dump(getMax(12));