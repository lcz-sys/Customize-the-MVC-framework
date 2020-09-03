<?php

namespace controller;

include_once 'F:/www/ObjectOriented/root/model/User.php';

class UserController{

	public function index(){

		$user = new \model\User();

		$user->getAllUsers();

		echo '实现了用户的业务操作<br/>';
	}
}