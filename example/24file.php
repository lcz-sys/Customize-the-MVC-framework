<?php

$file1 = @fopen('test2.html','wb');


$res = @fwrite($file1, 'ssdasdsadadasddaasdadsda');

var_dump($res);

@fclose($file1);

$file2 = @fopen('test2.html','rb');

$str = @fread($file2, 1024);

echo $str . '<br/>';

@fclose($file2);


$str = file_get_contents('test2.html');

echo $str . '<hr>';