<?php

namespace model;

include_once 'F:/www/ObjectOriented/root/core/DB.php';

class User{

	public function getAllUsers(){
		$sql = "select * from tab_ser";

		$db = new \core\DB();

		$db->query($sql);

		echo '查询到所有的用户数据<br/>';
	}


}
