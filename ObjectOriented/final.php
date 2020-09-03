<?php

class Man{

}

class Boy extends Man{

}

//定义一个类
final class Girl{

}

// class LittleGirl extends girl{

// }

class HuMan{
	public function walk(){
		echo __METHOD__,'<br/>';
	}
}