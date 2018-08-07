<?php
class PeriodicalZDModel  extends BaseModel{
	// function GetAll()
	// {
	// 	$sql = "select * from periodical_zd;";
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAll($offset,$length){
		$sql = "select * from periodical_zd limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from periodical_zd;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function Insert($QKBH, $YDJG,$YDCS,$YDND, $HDFSM,$ZDRZGH,$BZ)
	{
		$sql = "insert into periodical_zd (QKBH, YDJG,YDCS,YDND, HDFSM,ZDRZGH,BZ)values(";
		$sql .= "'$QKBH', '$YDJG','$YDCS','$YDND', '$HDFSM','$ZDRZGH','$BZ')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delById($id)
	{
		$sql = "delete from periodical_zd where QKDGH = $id";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetInfoById($id)
	{
		$sql = "select * from periodical_zd where QKDGH = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function Update($id,$QKBH, $YDJG,$YDCS,$YDND, $HDFSM,$ZDRZGH,$BZ)
	{
		$sql = "update periodical_zd set ";
		
		$sql .= "QKBH='$QKBH'";
		$sql .= ", YDJG='$YDJG'";
		$sql .= ", YDCS='$YDCS'";
		$sql .= ", YDND='$YDND'";
		$sql .= ", HDFSM='$HDFSM'";
		$sql .= ", ZDRZGH='$ZDRZGH'";
		$sql .= ", BZ='$BZ'";

		$sql .= " where QKDGH = $id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
