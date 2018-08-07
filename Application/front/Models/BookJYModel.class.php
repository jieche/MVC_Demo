<?php
class BookJYModel  extends BaseModel
{
	// function GetAllBookJY(){
	// 	$sql = "select * from book_jy ;";
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAllBookJY($offset,$length){
		$sql = "select * from book_jy  limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from book_jy;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function InsertBookJY($dh_id, $JYRQ,$JYR_id,$GHRQ, $BZ)
	{
		$sql = "insert into book_jy (dh_id, JYRQ,JYR_id,GHRQ, BZ)values(";
		$sql .= "'$dh_id', '$JYRQ','$JYR_id','$GHRQ', '$BZ')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delBookJYById($JY){
		$sql = "delete from book_jy where jy_id = $JY";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetBookJYInfoById($id){
		$sql = "select * from book_jy where jy_id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function UpdateBookJY($JY_id,$dh_id, $JYRQ,$JYR_id,$GHRQ, $BZ)
	{
		$sql = "update book_jy set dh_id='$dh_id'";
		$sql .= ", JYRQ='$JYRQ'";
		$sql .= ", JYR_id='$JYR_id'";
		$sql .= ", GHRQ='$GHRQ'";
		$sql .= ", BZ='$BZ'";
		$sql .= " where jy_id = $JY_id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
