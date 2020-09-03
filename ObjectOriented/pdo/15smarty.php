<?php

include_once '../smarty/Smarty.class.php';

$s = new Smarty();

function show(){
	echo __METHOD__;
}

$s->display('15template.html');