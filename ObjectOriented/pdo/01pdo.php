<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=travel';

$user = 'root';

$pass = '';

 $pdo = new PDO($dsn,$user,$pass);

 // var_dump($pdo);

 $sql = 'select * from tab_seller';

 $res = $pdo->query($sql);

if($res === false){
	echo 'SQL错误;<br/>';
	echo '错误代码为：' . $pdo->errorCode() . '<br/>';
	echo '错误原因是：' . $pdo->errorInfo()[2] .  '<br/>';

	exit;
}

 var_dump($res);