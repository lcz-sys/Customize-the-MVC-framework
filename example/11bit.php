<?php

$a = 5;

$b = 3;

$temp = $a;

$a = $b;

$b = $temp;

$a = 5;

$b = 3;

$a = $b + $a;

$b = $a - $b;

$a = $a - $b;

echo $a,$b . '<br/>';


$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo $a,$b;
