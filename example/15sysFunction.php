<?php


//php time system function

echo time();

echo '<br/>';

echo date('Y年m月d日 H:i:s');

// phpinfo();

echo strtotime('tomorrow 12 hour');

echo '<hr>';

echo mt_rand(),'<br/>';

echo mt_rand(5,15);

echo '<br/>';

echo chr(97);
echo ord('a');

$info = 'China|Guangdong|Guangzhou|Tianhe';

var_dump(explode('|', $info));

echo md5('123456');

echo '<hr>';

echo str_repeat('1111111', 10);

echo '<hr>';

echo strlen($info);

echo trim('   test    ');

$file = 'sdjskad.sc';


echo strstr($file,'.');


echo '<hr>';

var_dump(range(1, 10, 2));

$arr = range(1,10);

echo current($arr);
var_dump(next($arr));
echo current($arr);
var_dump(prev($arr));

echo current($arr);

list($a,$b,$c) = $arr;

echo $a,$b,$c;
