<?php
/*
function display(){
	echo __NAMESPACE__,__FUNCTION__,'<br/>';
}

display();

\display();*/

namespace space;

echo PHP_VERSION;

echo count(array(1,2,4));

new \mysqli('localhost','root','','travel','3306');


include_once 'nospace.php';

display();

\display();