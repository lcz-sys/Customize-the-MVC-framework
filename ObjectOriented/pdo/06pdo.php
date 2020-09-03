<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=travel','root','');

// $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$pdo -> exec('set names utf8');

try{
	$pdo -> exec('insert into user values()');
}catch(PDOException $e){
	echo 'SQL运行错误！<br/>';
	echo '错误文件为：'. $e->getFile() . '<br/>';
	echo '错误行号为：'.$e->getLine().'<br/>';
	echo '错误描述为：'. $e->getMessage().'<br/>';
	die();
}


