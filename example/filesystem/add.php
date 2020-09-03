<?php

$dir = $_GET['dir'] ?? '';
$filedir = $_GET['filedir'] ?? '';
$filename = $_GET['filename'] ?? '';

if(empty($filedir) || empty($filename)){
	echo '路径无效';
	header('Refresh:1;url=index.html');
	exit;
}

$c_dir = $filedir . '/' . $filename;

// echo $c_dir;

// var_dump($c_dir);

if(!is_dir($c_dir)){
	echo '路径无效';
	header('Refresh:1;url=index.html');
	exit;
}

include_once 'add.html';