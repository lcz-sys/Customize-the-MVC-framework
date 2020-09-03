<?php

//命名空间

namespace core;

use \PDO, \PDOStatement, \PDOException;

class Dao{
	private $pdo;
	private $fetch_mode;

	public function __construct($info = array(),$drivers = array()){
		$type = $info['type'] ?? 'mysql';
		$host = $info['host'] ?? 'localhost';
		$port = $info['port'] ?? '3306';
		$user = $info['user'] ?? 'root';
		$pass = $info['pass'] ?? '';
		$dbname = $info['dbname'] ?? 'travel';
		$charset = $info['charset'] ?? 'utf8';
		$this -> fetch_mode = $info['fetch_mode'] ?? PDO::FETCH_ASSOC;

		//驱动控制
		$drivers[PDO::ATTR_ERRMODE] = $drivers[PDO::ATTR_ERRMODE] ?? PDO::ERRMODE_EXCEPTION;

		//实例化PDO对象
		try{
			$this->pdo = new PDO($type.':host='.$host.';port='.$port.';dbname='.$dbname,$user,$pass,$drivers);
		}catch(PDOException $e){
			echo '数据库连接失败！<br/>';
			echo '错误文件为：'. $e->getFile() . '<br/>';
			echo '错误行号为：'.$e->getLine().'<br/>';
			echo '错误描述为：'. $e->getMessage().'<br/>';
			die();
		}

		//设定字符集
		try{
			$this->pdo -> exec("set names {$charset}");
		}catch(PDOException $e){
			$this->dao_exception($e);
		}

	}

	private function dao_exception(PODException $e){
		echo 'SQL运行错误！<br/>';
		echo '错误文件为：'. $e->getFile() . '<br/>';
		echo '错误行号为：'.$e->getLine().'<br/>';
		echo '错误描述为：'. $e->getMessage().'<br/>';
		die();
	}

	//写操作
	public function dao_exec(){
		try{
			return $this->pdo->exec($sql);
		}catch(PDOExection $e){
			$this->dao_exection($e);
		}
	}

	//获取自增长ID
	public function dao_insert_id(){
		return $this->pdo->lastInsertId();
	}

	//读方法
	public function dao_query($sql,$all = false){
		try{
			$stmt = $this->pdo->query($sql);
			//设置fetch_mode
			$stmt->setFetchMode($this->fetch_mode);

			if(!$all){
				return $stmt->fetch();
			}else{
				return $stmt->fetchAll();
			}
		}catch(PDOException $e){
			$this->dao_exception($e);
		}
	}
}


// $dao = new Dao();
// $row = $dao->dao_query('select * from tab_user');
// var_dump($row);