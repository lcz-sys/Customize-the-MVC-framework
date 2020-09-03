<?php

@mkdir('upload/dir');

@mkdir('F:/www/example/dir');

$res = @rmdir('upload');

var_dump($res);

// @rmdir('F:/www/example/dir');

sleep(10);

@rename('dir','DIR');