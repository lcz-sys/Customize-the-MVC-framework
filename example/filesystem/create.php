<?php

$dir = $_POST['dir'] ?? '';
$filedir = $_POST['filedir'] ?? '';
$filename = $_POST['filename'] ?? '';
$type = $_POST['type'] ?? '1';

if(!is_dir($filedir)){
	echo '路径无效';
	header('Refresh:1;url=index.html');
	exit;
}

if(empty($filename)){
	echo '文件名不能为空';
	header('Refresh:1;url=getfile.php?dir=' . $dir);
	exit;
}

if($type == '1'){
	$res = @mkdir($filedir . '/' . $filename);
}else{
	$res = @touch($filedir . '/' . $filename);
}

if(!$res){
	echo '创建失败';
	header('Refresh:1;url=getfile.php?dir=' . $dir);
	exit;
}else{
	echo '创建成功';
	header('Refresh:1;url=getfile.php?dir=' . $dir);
	exit;
}
