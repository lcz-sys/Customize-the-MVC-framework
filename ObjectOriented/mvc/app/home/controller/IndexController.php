<?php

namespace home\controller;
use \core\Controller;

class IndexController extends Controller{
	public function index(){
		// var_dump($this->smarty);

		$m = new \home\model\UserModel();

		$res = $m->getById(4);

		var_dump($res);

		/*$this->assign('str','hello world!-------');

		$this->display('index.html');

		$this->success('欢迎来到王者荣耀，请先登录！','login');*/
	}

	/*public function login(){
		echo '成功登录';
	}*/
}
