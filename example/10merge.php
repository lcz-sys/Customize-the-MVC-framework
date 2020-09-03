<?php

//合并运算符

$a = $x ?? 100;

echo $a . '<br/>';


$b = 10;

$c = $b ?? $d = 5;

echo $c;

var_dump($d);


$f = 0;

$g = $f ?? 1000;

echo $g;