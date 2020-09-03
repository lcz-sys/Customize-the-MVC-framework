<?php

namespace core;

class Controller{

	protected $smarty;

	public function __construct(){

		include VENDOR_PATH . 'smarty/Smarty.class.php';
		
		$this->smarty = new \Smarty();

		$this->smarty->template_dir = APP_PATH . P . '/view/' . C . '/';
		$this->smarty->caching = false;
		$this->smarty->cache_dir = APP_PATH . P . '/cache/';
		$this->smarty->cache_lifetime = 120;
		$this->smarty->compile_dir = APP_PATH . P . '/view/' . C .'/template_c/';
	}

	protected function assign($key,$value){
		$this->smarty->assign($key,$value);
	}

	protected function display($file){
		$this->smarty->display($file);
	}

	//错误跳转
	protected function error($msg,$a = A,$c = C,$p = P,$time = 3){
		$refresh = 'Refresh:' . $time . ';url=' . URL . 'index.php?c=' . $c . '&a=' . $a . '&p=' . $p;

		header($refresh);
		echo $msg;
		exit;
	}

	//成功跳转
	protected function success($msg,$a = A,$c = C,$p = P,$time = 3){
		$refresh = 'Refresh:' . $time . ';url=' . URL . 'index.php?c=' . $c . '&a=' . $a . '&p=' . $p;

		header($refresh);
		echo $msg;
		exit;
	}
}