<?php

class Human{
	private $age = 10;

	//重载方法

	//读取方法
	public function __get($name){
		echo $name,'---',__METHOD__,'<br/>';
	}

	//设置方法
	public function __set($name, $value){
		echo $name,':',$value,'---',__METHOD__,'<br/>';
	}

	//判定方法
	public function __isset($name){
		echo $name,'---',__METHOD__,'<br/>';
	}

	//删除方法
	public function __unset($name){
		echo $name,'---',__METHOD__,'<br/>';
	}

	//普通输出
	public function __toString(){
		echo '---',__METHOD__,'<br/>';
		return 'toString';
	}
}

//实例化
$h = new Human();

echo $h->age;

$h->age = 100;

isset($h->age);

echo $h;