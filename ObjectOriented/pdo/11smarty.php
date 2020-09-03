<?php

include_once '../smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('hello','hello world');

$smarty->display('09template.html');