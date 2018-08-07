<?php
class BookBMModel  extends BaseModel
{
	// function GetAllBookBM(){
	// 	$sql = "select * from book_bm ;";
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAllBookBM($offset,$length){
		$sql = "select * from book_bm  limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from book_bm;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function InsertBookBM($dh_id, $PJH,$JCH,$BMRQ, $GCD)
	{
		$sql = "insert into book_bm (dh_id, PJH,JCH,BMRQ, GCD)values(";
		$sql .= "'$dh_id', '$PJH','$JCH','$BMRQ', '$GCD')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delBookBMById($BM){
		$sql = "delete from book_bm where bm_id = $BM";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetBookBMInfoById($id){
		$sql = "select * from book_bm where bm_id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function UpdateBookBM($BM_id,$dh_id, $PJH,$JCH,$BMRQ, $GCD)
	{
		$sql = "update book_bm set dh_id='$dh_id'";
		$sql .= ", PJH='$PJH'";
		$sql .= ", JCH='$JCH'";
		$sql .= ", BMRQ='$BMRQ'";
		$sql .= ", GCD='$GCD'";
		$sql .= " where bm_id = $BM_id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
