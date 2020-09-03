<?php


function myscandir($dir){


	is_dir($dir) or die('don\'t dir');

	$res = @opendir($dir);

	$file = '';

	while($file = readdir($res)){
		// echo $file . '<br/>';

		if($file == '.' || $file == '..') {
			continue;
		}

		$tmp_dir = $dir . '/' . $file;

		echo $tmp_dir . '<br/>';

		if(is_dir($tmp_dir)){
			myscandir($tmp_dir);
		}
	}

	@closedir($dir);
}


myscandir('F:/www');