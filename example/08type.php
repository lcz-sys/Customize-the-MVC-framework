<?php

$num = 100;

$str = 'abc';

var_dump(is_numeric($num));

var_dump(is_scalar($num));

var_dump(is_null($num));

echo '<br/>';

$a = 1.2;

$b = '1326ads1';

$num1 = @($a + $b);

echo $num1;