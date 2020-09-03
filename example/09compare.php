<?php


$a = 10;

$b = 5;

$c = '10';

$res = ($a>$b);
var_dump($res);

$res = ($a == $c);
var_dump($res);

$res = ($a === $c);
var_dump($res);

echo '<br/>';

$b1 = 0;
$b2 = -1;

var_dump((boolean)$b1,(boolean)$b2);

var_dump($b1 <=> $b2);

$res = $b1 <=> $b2;

var_dump($res === 1);