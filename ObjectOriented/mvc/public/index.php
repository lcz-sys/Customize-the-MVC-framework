<?php

use \core\App as app;

define('ACCESS', true);

//定义上级目录常量
define('ROOT_PATH',str_replace('\\','/',dirname(__DIR__)) . '/');

include ROOT_PATH . 'core/App.php';

app::start();