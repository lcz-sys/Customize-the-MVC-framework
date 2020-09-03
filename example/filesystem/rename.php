<?php

$dir = $_POST['dir'] ?? '';
$filedir = $_POST['filedir'] ?? '';
$filename = $_POST['filename'] ?? '';
$newname = $_POST['newname'] ?? '';

if(!is_dir($filedir)){
	echo '路径无效';
	header('Refresh:2;url=index.html');
	exit;
}

$c_file = $filedir . '/' . $filename;

if(!file_exists($c_file)){
	echo '文件不存在';
	header('Refresh:2;url=getfile.php?dir=' . $dir);;
	exit;
}

if(empty($newname)){
	echo '新文件名字不能为空';
	header('Refresh:2;url=index.html');
	exit;
}

if(@rename($c_file,$filedir . '/' . $newname)){
	echo '文件重命名成功';
	header('Refresh:2;url=getfile.php?dir=' . $dir);
	exit;
}else{
	echo '文件重命名失败';
	header('Refresh:2;url=getfile.php?dir=' . $dir);
	exit;
}