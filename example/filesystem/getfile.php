<?php

$dir = $_GET['dir'] ?? '';

if(!is_dir($dir)){
	echo '路径无效!';
	header('Refresh:1;url=index.html');
	exit;
}

// var_dump(substr($dir,-1,1));

// if(substr($dir,-1,1) == '/'){
// 	$dir = substr($dir,0,-1);
// }

$dir = rtrim($dir,'/');

// var_dump($dir);

include_once 'dirfile.php';

$files = dirfile($dir,$error);

if(!$files){
	echo $error;
	header('Refresh:1;url=index.html');
	exit;
}

// foreach ($files as $file) {
// 	echo $file['directory'] . '/' . $file['filename'] . '<br/>';
// }

include_once 'list.html';