<?php

class Nothing{

}

// var_dump(Nothing);

class MyClass{

}

// var_dump(new Nothing());
// var_dump(new MyClass());

$m = new Nothing();
$n = new MyClass();

var_dump($m,$n);