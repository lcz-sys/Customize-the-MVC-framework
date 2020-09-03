<?php

function show(){
	echo __FUNCTION__;
}


/**
*
*@param1 string 
*/
function getFunction($func_name){
	$func_name();
}

getFunction('show');