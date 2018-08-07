<?php
class adminModel  extends BaseModel{
	// function GetAll(){
	// 	$sql = "select * from admin_user;";
	// 	//$db = MySQLDB::GetInstance($config);
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAll($offset,$length){
		$sql = "select * from admin_user limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from admin_user;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function Insert($admin_name, $admin_pass)
	{
		$sql = "insert into admin_user (admin_name,admin_pass)values(";
		$sql .= "'$admin_name', '$admin_pass')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delById($TS){
		$sql = "delete from admin_user where id = $TS";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetInfoById($i){
		$sql = "select * from admin_user where id= $i;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function Update($i,$admin_name, $admin_pass){
		$sql = "update admin_user set admin_name='$admin_name'";
		$sql .= ", admin_pass='$admin_pass'";
		$sql .= " where id = $i";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function Search($name)
	{
		$sql = "select * from books where ZBT LIKE '%$name%';";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
}
