<?php
class BookDHModel  extends BaseModel
{
	// function GetAllBookDH(){
	// 	$sql = "select book_dh.* from book_dh ;";
	// 	//这里遗留了一个问题---如何关联到books表的正标题，，，，实现几次都没实现
	// 	//$sql = "select dh.* books.ZBT  from book_dh as dh  left join (book_dg as dg left join books as bo on dg.TSBH=bo.TSBH) on dh.DGH=dg.DGH;";
	// 	//sELECT u.sName p.sCaption d.sCaption FROM tb_user AS u LEFT JOIN (tb_pos AS p LEFT JOIN tb_dpt AS d ON p.id_Dpt=d.id) ON u.id_Pos=p.id;
	// 	//$db = MySQLDB::GetInstance($config);
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAllBookDH($offset,$length){
		$sql = "select * from book_dh  limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from book_dh;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function InsertBookDH($DGH, $SDJG,$SDCS,$DHRQ, $JSRZGH,$BZ)
	{
		$sql = "insert into book_dh (DGH, SDJG,SDCS,DHRQ, JSRZGH,BZ)values(";
		$sql .= "'$DGH', '$SDJG','$SDCS','$DHRQ', '$JSRZGH','$BZ')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delBookDHById($DH){
		$sql = "delete from book_dh where dh_id = $DH";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetBookDHInfoById($id){
		$sql = "select * from book_dh where dh_id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function UpdateBookDH($DH_id,$DGH, $SDJG,$SDCS,$DHRQ, $JSRZGH,$BZ)
	{
		$sql = "update book_dh set DGH='$DGH'";
		$sql .= ", SDJG='$SDJG'";
		$sql .= ", SDCS='$SDCS'";
		$sql .= ", DHRQ='$DHRQ'";
		$sql .= ", JSRZGH='$JSRZGH'";
		$sql .= ", BZ='$BZ'";
		$sql .= " where dh_id = $DH_id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
