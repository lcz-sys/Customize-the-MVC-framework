<?php

include_once '../smarty/Smarty.class.php';

$s=new Smarty();

$s->template_dir = 'templates/';

$s->assign('hello','hello universe');

$s->display('01template.html');
