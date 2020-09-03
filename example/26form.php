<?php


$key = @$_GET['key'];
if($key){
	file_put_contents('test2.html', $key);
}


$username = @$_POST['username'];

$password = @$_POST['password'];

if($username&&$password){
	$arr = array('username' => $username, 'password' => $password);

	$putData = json_encode($arr);

	file_put_contents('test2.html', $putData);
}