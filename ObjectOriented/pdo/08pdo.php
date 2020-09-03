<?php

$drivers = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=travel','root','',$drivers);

$pdo -> exec('set names  utf8');

$pre_sql = 'select * from tab_user where uid = :id';

$stmt = $pdo->prepare($pre_sql);

// $stmt ->bindValue(':id',4);

$id = 4;

$stmt -> bindParam(':id',$id);

// $res = $stmt -> execute();
$stmt -> execute();

// var_dump($res);

var_dump($stmt->fetch(PDO::FETCH_ASSOC));