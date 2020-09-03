<?php

$dir = $_GET['dir'] ?? '';
$filedir = $_GET['filedir'] ?? '';
$filename = $_GET['filename'] ?? '';

if(empty($filedir) || empty($filename)){
	echo '路径无效';
	header('Refresh:1;url=index.html');
	exit;
}

$del = $filedir . '/' . $filename;

// echo $del;

if(!file_exists($del)){
	echo $error;
	header('Refresh:1;url=getfile.php?dir=' . $dir);
	exit;
}

if(is_dir($del)){
	$res = @rmdir($del);
}else{
	$res = @unlink($del);
}

if(!$res){
	echo '删除失败';
	header('Refresh:1;url=getfile.php?dir=' . $dir);
	exit;
}else{
	echo '删除成功';
	header('Refresh:1;url=getfile.php?dir=' . $dir);
	exit;
}