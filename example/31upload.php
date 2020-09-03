<?php

echo '<pre>';

$image = $_FILES['image'];

include_once '30upload.php';

$type = array('image/jpeg','image/jpg','image/png','image/gif');

for($i = 0,$len = count($image['name']);$i < $len;$i++){
	$file = array(
		'name' => $image['name'][$i],
		'type' => $image['type'][$i],
		'tmp_name' => $image['tmp_name'][$i],
		'error' => $image['error'][$i],
		'size' => $image['size'][$i]
	);

	$res = fileupload($file,'DIR/',$error,$type);

	if($res){
		echo '文件上传成功，对应的文件名是：' . $res;
	}else{
		echo $error;
	}

}