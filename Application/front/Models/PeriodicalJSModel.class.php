<?php
class PeriodicalJSModel  extends BaseModel{
	// function GetAll()
	// {
	// 	$sql = "select * from periodical_js;";
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAll($offset,$length){
		$sql = "select * from periodical_js limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from periodical_js;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function Insert($QKDGH, $JSRQ,$JSYY,$JSJG,$JSRZGH)
	{
		$sql = "insert into periodical_js (QKDGH, JSRQ,JSYY,JSJG,JSRZGH)values(";
		$sql .= "'$QKDGH', '$JSRQ','$JSYY','$JSJG','$JSRZGH')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delById($id)
	{
		$sql = "delete from periodical_js where js_id = $id";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetInfoById($id)
	{
		$sql = "select * from periodical_js where js_id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function Update($id,$QKDGH, $JSRQ,$JSYY,$JSJG,$JSRZGH)
	{
		$sql = "update periodical_js set ";
		
		$sql .= "QKDGH='$QKDGH'";
		$sql .= ", JSRQ='$JSRQ'";
		$sql .= ", JSYY='$JSYY'";
		$sql .= ", JSJG='$JSJG'";
		$sql .= ", JSRZGH='$JSRZGH'";

		$sql .= " where js_id = $id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
