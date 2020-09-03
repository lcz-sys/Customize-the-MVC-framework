<?php

function pdo_init(){

	$pdo = @new PDO('mysql:host=localhost;port=3306;dbname=travel','root','');

	if(!$pdo){
		die('数据库连接失败！');
	}

	$res = $pdo->exec('set names utf8');

	if($res === false){

		echo 'SQL错误<br/>';
		echo '错误代码为：' . $pdo->errorCode() . '<br/>';
		echo '错误原因是：' . $pdo->errorInfo()[2] .  '<br/>';

		exit;
	}

	return $pdo;
}

function pdo_exec($pdo,$sql){

	$res = $pdo->exec($sql);

	if($res === false){

		echo 'SQL错误<br/>';
		echo '错误代码为：' . $pdo->errorCode() . '<br/>';
		echo '错误原因是：' . $pdo->errorInfo()[2] .  '<br/>';

		exit;
	}

	return $res;
}

function pdo_query($pdo,$sql){

	$stmt = $pdo->query($sql);

	if($stmt === false){

		echo 'SQL错误<br/>';
		echo '错误代码为：' . $pdo->errorCode() . '<br/>';
		echo '错误原因是：' . $pdo->errorInfo()[2] .  '<br/>';

		exit;
	}

	/*foreach ($res as $row) {
        $row['sname'];
        $row['consphone'];  
        $row['address'];
    }

	return $row;*/

	return $stmt;
}

function pdo_id($pdo){
	return $pdo->lastInsertId();
}

function pdo_get($stmt, $only = true, $fetch_style = PDO::FETCH_ASSOC){
	if($only){
		return $stmt->fetch($fetch_style);
	}else{
		return $stmt->fetchall($fetch_style);
	}
}