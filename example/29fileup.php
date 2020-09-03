<?php


$file = $_FILES['file'];


// if($file['error'] == 0){
// 	@move_uploaded_file($file['tmp_name'], 'DIR/' . $file[name]);
// }

include_once '30upload.php';

$res = fileupload($file,'DIR/',$error);

if($res){
	echo '文件上传成功';
}else{
	echo $error;
}