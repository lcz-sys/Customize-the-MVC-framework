<?php

include_once '../smarty/Smarty.class.php';

$s = new Smarty();

$arr = array(
	'username'=>'张三',
	'password'=>'123456'
	);

// $_POST['username'] = $arr['username'];
$_POST['username'] = $arr['username'];

$s->assign('user',$arr);

$s->display('14template.html');