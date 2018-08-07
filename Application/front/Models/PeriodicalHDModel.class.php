<?php
class PeriodicalHDModel  extends BaseModel{
	// function GetAll()
	// {
	// 	$sql = "select * from periodical_hd;";
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAll($offset,$length){
		$sql = "select * from periodical_hd limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from periodical_hd;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function Insert($QKDGH, $HDQK,$BMRQ,$GCD)
	{
		$sql = "insert into periodical_hd (QKDGH, HDQK,BMRQ,GCD)values(";
		$sql .= "'$QKDGH', '$HDQK','$BMRQ','$GCD')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delById($id)
	{
		$sql = "delete from periodical_hd where hd_id = $id";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetInfoById($id)
	{
		$sql = "select * from periodical_hd where hd_id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function Update($id,$QKDGH, $HDQK,$BMRQ,$GCD)
	{
		$sql = "update periodical_hd set ";
		
		$sql .= "QKDGH='$QKDGH'";
		$sql .= ", HDQK='$HDQK'";
		$sql .= ", BMRQ='$BMRQ'";
		$sql .= ", GCD='$GCD'";

		$sql .= " where hd_id = $id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
