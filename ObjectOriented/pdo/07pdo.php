<?php

$drivers = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try{
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=travel','root','',$drivers);
}catch(PDOException $e){
	echo '数据库连接失败！<br/>';
	echo '错误文件为：'. $e->getFile() . '<br/>';
	echo '错误行号为：'.$e->getLine().'<br/>';
	echo '错误描述为：'. $e->getMessage().'<br/>';
	die();
}

$sql = 'set names utf8';

try{
	$pdo -> exec($sql);
}catch(PDOException $e){
	echo 'SQL运行错误！<br/>';
	echo '错误文件为：'. $e->getFile() . '<br/>';
	echo '错误行号为：'.$e->getLine().'<br/>';
	echo '错误描述为：'. $e->getMessage().'<br/>';
	die();
}