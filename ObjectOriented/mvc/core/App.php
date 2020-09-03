<?php

namespace core;

if(!defined('ACCESS')){
	header('location:../public/index.php');
	exit;
}

class App{

	public static function start(){
		self::set_path();
		self::set_config();
		self::set_error();
		self::set_url();
		self::set_autoload();
		self::set_dispatch();
	}

	private static function set_path(){
		define('CORE_PATH', ROOT_PATH . 'core/');
		define('APP_PATH', ROOT_PATH . 'app/');
		define('HOME_PATH', APP_PATH . 'home/');
		define('ADMIN_PATH', APP_PATH . 'admin/');
		define('HOME_CONT', HOME_PATH . 'controller/');
		define('HOME_VIEW', HOME_PATH . 'view/');
		define('HOME_MODEL', HOME_PATH . 'model/');
		define('ADMIN_CONT', ADMIN_PATH . 'controller/');
		define('ADMIN_VIEW', ADMIN_PATH . 'view/');
		define('ADMIN_MODEL', ADMIN_PATH . 'model/');
		define('VENDOR_PATH', ROOT_PATH . 'vendor/');
		define('CONFIG_PATH', ROOT_PATH . 'config/');
		define('URL', 'http://www.mvc.com/');
	}

	private static function set_error(){

		@ini_set('error_reporting',$config['system']['error_reporting']);
		@ini_set('display_errors',$config['system']['display_errors']);
	}

	private static function set_config(){

		global $config;

		$config = include CONFIG_PATH . 'config.php';

	}

	private static function set_url(){
		$p = $_REQUEST['p'] ?? 'home';  //前台or后台
		$c = $_REQUEST['c'] ?? 'Index'; //**Controller
		$a = $_REQUEST['a'] ?? 'index'; //控制器里的方法名

		define('P',$p);
		define('C',$c);
		define('A',$a);
	}

	//自动加载
	private static function set_autoload_function($class){
		$class = basename($class);

		//判定对应文件夹是否存在
		$core_file = CORE_PATH . $class . '.php';
		if(file_exists($core_file)) include $core_file;

		//判断控制器是否存在
		$cont_file = APP_PATH . P . '/controller/' . $class . '.php';
		if(file_exists($cont_file)) include $cont_file;

		//判断模型是否存在
		$model_file = APP_PATH . P . '/model/' . $class . '.php';
		if(file_exists($model_file)) include $model_file;

		//插件加载
		$vendor_file = VENDOR_PATH . $class . '.php';
		if(file_exists(vendor_file)) include $vendor_file;
	}

	//注册自动加载
	private static function set_autoload(){
		@spl_autoload_register(array(self,'set_autoload_function'));
	}

	//分发控制器
	private static function set_dispatch(){
		$p = P;
		$c = C;
		$a = A;

		$controller = "\\{$p}\\controller\\{$c}Controller";
		// echo $controller;

		$controller = new $controller();
		// var_dump($c);

		$controller->$a();

	}
}