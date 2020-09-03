<?php

namespace core;

class Model{
	protected $dao;
	protected $fields = array();

	public function __construct(){
		global $config;

		//实例化Dao
		$this->dao = new Dao($config['datebase'],$config['drivers']);

		//初始化字段信息
		$this->getFields();
	}

	//写方法
	protected function exec(string $sql){
		return $this->dao->dao_exec($sql);
	}

	//获取ID
	protected function getLastId(){
		return $this->dao->dao_insert_id();
	}

	//读方法
	protected function query(string $sql,$all = false){
		return $this->dao->dao_query($sql,$all);
	}

	//构造全表名
	protected function getTable(string $table = ''){

		global $config;

		$table = empty($table) ? $this -> table : $table;

		return $config['datebase']['prefix'] . $table;
	}

	//获取全部数据
	protected function gerAll(){
		$sql = "select * from {$this->getTable()}";

		return $this->query($sql);
	}

	private function getFields(){
		$sql = "desc {$this->getTable()}";

		$rows = $this->query($sql,true);

		foreach ($rows as $row) {
			$this->fields[] = $row['Field'];

			//确定主键
			if($row['Key'] == 'PRI'){
				$this->fields['Key'] = $row['Field'];
			}
		}
	}

	//通过主键获取记录
	public function getById($id){

		if(!isset($this->fields['Key'])) return false;

		$sql = "select * from {$this->getTable()} where {$this->fields['Key']} = '{$id}'";

		return $this->query($sql);
	}
}