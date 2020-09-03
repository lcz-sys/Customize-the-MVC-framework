<?php

// $res = 4 / 0;

// echo $res;


$n1 = 15;

$n2 = 10;

/*if($n2 == 0){
	throw new Exception('除数不能为0');
}

$res = $n1 / $n2;*/

try{
	$res = $n1 / $n2;
}catch(Exception $e){
	die('出错了...');
}

echo $res;

