<?php

$info = @scandir('F:/www/example');

// var_dump($info);

foreach($info as $key => $value){
	// echo '第' . $key .'个文件是' . $value . '<br/>';
}

is_dir('F:/www/example') or die('目录不存在');

$res = opendir('F:/www/example');

// var_dump($res);
$file = '';

while($file = readdir($res)){
	// echo $file . '<br/>';
}

closedir($res);

echo getcwd() . '<br/>';

chdir('upload/dir');

echo getcwd() . '<br/>';