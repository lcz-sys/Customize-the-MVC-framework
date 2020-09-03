<?php

$f1 = @fopen('test.html','rb');

$f2 = @fopen('test1.html','wb');

@fclose($f1);

@fclose($f2);