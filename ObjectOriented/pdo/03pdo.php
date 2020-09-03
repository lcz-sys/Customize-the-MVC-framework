<?php

include_once '02pdo.php';

$pdo = pdo_init();

$sql = 'select * from tab_seller';

$res = pdo_query($pdo,$sql);

var_dump($res);