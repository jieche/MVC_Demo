<?php
class BookDGModel  extends BaseModel
{
	// function GetAllBookDG(){
	// 	$sql = "select book_dg.*,ZBT from book_dg inner join books as t on t.TSBH=book_dg.TSBH;";
	// 	//$db = MySQLDB::GetInstance($config);
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAllBookDG($offset,$length){
		$sql = "select book_dg.*,ZBT from book_dg inner join books as t on t.TSBH=book_dg.TSBH limit {$offset},{$length};";
		// $sql = "select * from books limit {$offset},{$length};";
		// $sql = "select book_dg.*,ZBT from book_dg inner join books as t on t.TSBH=book_dg.TSBH;";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from book_dg;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function InsertBookDG($TSBH, $YDJG,$YDCS,$YDRQ, $HDFSM,$id,$BZ)
	{
		$sql = "insert into book_dg (TSBH, YDJG,YDCS,YDRQ, HDFSM,id,BZ)values(";
		$sql .= "'$TSBH', '$YDJG','$YDCS','$YDRQ', '$HDFSM','$id','$BZ')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delBookDGById($DG){
		$sql = "delete from book_dg where DGH = $DG";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetAllBook(){
		$sql = "select * from book_dg;";
		//$db = MySQLDB::GetInstance($config);
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetBookDGInfoById($id){
		$sql = "select * from book_dg where DGH = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function UpdateBookDG($DGH_id,$TSBH, $YDJG,$YDCS,$YDRQ, $HDFSM,$id,$BZ)
	{
		$sql = "update book_dg set TSBH='$TSBH'";
		$sql .= ", YDJG='$YDJG'";
		$sql .= ", YDCS='$YDCS'";
		$sql .= ", YDRQ='$YDRQ'";
		$sql .= ", HDFSM='$HDFSM'";
		$sql .= ", id='$id'";
		$sql .= ", BZ='$BZ'";
		$sql .= " where DGH = $DGH_id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
