<?php


class DB
{
    private $host;
    private $port;
    private $user;
    private $pass;
    private $dbname;
    private $charset;

    public function __construct(array $info = array())
    {
        $this->host = $info['host'] ?? 'localhost';
        $this->port = $info['port'] ?? '3306';
        $this->user = $info['user'] ?? 'root';
        $this->pass = $info['pass'] ?? '';
        $this->dbname = $info['dbname'] ?? 'travel';
        $this->charset = $info['charset'] ?? 'utf8';
		
		
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
		
		if(!$res){
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