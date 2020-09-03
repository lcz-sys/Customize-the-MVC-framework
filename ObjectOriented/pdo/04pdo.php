<?php

include_once '02pdo.php';

$pdo = pdo_init();

$sql = 'select * from tab_seller';

$stmt = pdo_query($pdo,$sql);

$res = pdo_get($stmt,true);

var_dump($res);