<?php
class PeriodicalJYModel  extends BaseModel{
	// function GetAll()
	// {
	// 	$sql = "select * from periodical_jy;";
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAll($offset,$length){
		$sql = "select * from periodical_jy limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from periodical_jy;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function Insert($QKDGH, $JYRQ,$JYR_id,$GHRQ,$BZ)
	{
		$sql = "insert into periodical_jy (QKDGH, JYRQ,JYR_id,GHRQ,BZ)values(";
		$sql .= "'$QKDGH', '$JYRQ','$JYR_id','$GHRQ','$BZ')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delById($id)
	{
		$sql = "delete from periodical_jy where jy_id = $id";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetInfoById($id)
	{
		$sql = "select * from periodical_jy where jy_id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function Update($id,$QKDGH, $JYRQ,$JYR_id,$GHRQ,$BZ)
	{
		$sql = "update periodical_jy set ";
		
		$sql .= "QKDGH='$QKDGH'";
		$sql .= ", JYRQ='$JYRQ'";
		$sql .= ", JYR_id='$JYR_id'";
		$sql .= ", GHRQ='$GHRQ'";
		$sql .= ", BZ='$BZ'";

		$sql .= " where jy_id = $id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
