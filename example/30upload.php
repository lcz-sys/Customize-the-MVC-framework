<?php

function fileupload($file, $path, &$error, $type = array(), $size = 2000000){

	if(!isset($file['error'])){
		$error = '文件无效';
		return false;
	}

	if(!is_dir($path)){
		$error = '存储路径无效';
		return false;
	}

	switch ($file['error']) {
		case 1:
		case 2:
			$error = '文件超过服务器允许大小';
			return false;
		case 3:
			$error = '文件上传缺失';
			return false;
		case 4:
			$error = '用户没有选择要上传的文件';
			return false;
		case 6:
		case 7:
			$error = '服务器操作失败';
			return false;
	}

	if(!empty($type) && !in_array($file['type'], $type)){
		$error = '当前上传文件的类型不符合';
		return false;
	}

	if($file['size'] > $size){
		$error = '文件大小超过当前允许范围，当前允许的大小是：' . string($size/1000000) . 'M.';

		return false;
	}

	$newfilename = getNewName($file['name']);

	if(@move_uploaded_file($file['tmp_name'], $path . $newfilename)){
		return $newfilename;
	}else{
		$error = '文件上传失败';
		return false;
	}
}

function getNewName($filename){

	$newname = strstr($filename,'.',true) . '_';

	$newname .= date('YmdHis');

	// $old = array_merge(range('a', 'z'),range('A', 'Z'));
	// shuffle($old);
	// for($i = 0; $i < 6; $i++){
	// 	$newname .= $old[$i];
	// }

	return $newname . strstr($filename, '.');
	
}