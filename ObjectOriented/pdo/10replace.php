<?php

$hello = 'hello world!';

$str = file_get_contents('09template.html');

$str = str_replace('{$hello}', $hello, $str);

echo $str;