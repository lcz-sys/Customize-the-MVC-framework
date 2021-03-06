<?php

class Sql{
	private $host;
	private $port;
	private $user;
	private $pass;
	private $dbname;
	private $charset;

	public function __construct(array $info = array()){
		$this->host = $info['host'] ?? 'localhost';
		$this->port = $info['port'] ?? '3306';
		$this->user = $info['user'] ?? 'root';
		$this->pass = $info['pass'] ?? '';
		$this->dbname = $info['dbname'] ?? 'travel';
		$this->charset = $info['charset'] ?? 'utf8';
		$this->sql_connect();

		$this->sql_charset();
	}

	private $link;

	private function sql_connect(){
		$this->link = new Mysqli($this->host,$this->user,$this->pass,$this->dbname,$this->port);

		if($this->link->connect_error){
			die('Connect Error(' . $this->link->connect_errno . ')' . $this->link->connect_error);
		}
	}

	private function sql_charset(){
		$sql = "set names {$this->charset}";

		$res = $this->link->query($sql);

		// var_dump($res);
	
		if (!$res) {
			die('Charset Error(' . $this->link->connect_errno . ')' . $this->link->connect_error);
		}
	}

	public $affected_rows;
	public function sql_exec($sql){
		$res = $this->link->query($sql);

		if(!$res){
			die('Sql Error(' . $this->link->errno . ')' . $this->link->error);
		}

		$this->affected_rows = $this->link->affected_rows;

		return $res;
	}

	//获取自增长id
	public function sql_last_id(){
		return $this->link->insert_id;
	}

	public $num_rows;
	public function sql_query($sql,$all = false){
		$res = $this->link->query($sql);

		if(!$res){
			die('Sql Error(' . $this->link->errno . ')' . $this->link->error);
		}

		$this->num_rows = $res->num_rows;

		if($all){
			return $res->fetch_all(MYSQLI_ASSOC);
		}else{
			return $res->fetch_assoc();
		}
	}
}

// $s = new Sql(array('charset'=>'utf8'));
$s = new Sql();

$sql = 'select * from tab_user';

$res = $s->sql_query($sql,true);

var_dump($res);

// $sql = "insert tab_user value('ssdsdasdssa','3','3','1111-11-11','2','2','2')";

// $res = $s->sql_exec($sql);

// var_dump($res);

echo $s->num_rows;