<?php

include_once '../smarty/Smarty.class.php';

$s = new Smarty();

$s->assign('str','hello world');

$s->assign('arr',array(1,2,3));

class p{
	public $name = 'p';
	public $age = 12;
}

$p = new P();

$s->assign('p',$p);

$_GET['username'] = 'jim';

$s->display('13template.html');