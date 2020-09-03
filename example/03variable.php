<?php

$a = 10;

$b = $a;

$c = &$a;

echo $a . '~' . $b . '~' . $c;

echo '<br/>';

$b = 100;

$c = 'abc';

echo $a . '~' . $b . '~' . $c;

?>