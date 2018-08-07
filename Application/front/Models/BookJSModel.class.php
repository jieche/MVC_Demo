<?php
class BookJSModel  extends BaseModel
{
	// function GetAllBookJS(){
	// 	$sql = "select * from book_js ;";
	// 	$data = $this->_dao->GetRows($sql);
	// 	return $data;
	// }
	function GetAllBookJS($offset,$length){
		$sql = "select * from book_js  limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from book_js;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function InsertBookJS($dh_id, $JSRQ,$JSYY,$JSJG, $JSRZGH)
	{
		$sql = "insert into book_js (dh_id, JSRQ,JSYY,JSJG, JSRZGH)values(";
		$sql .= "'$dh_id', '$JSRQ','$JSYY','$JSJG', '$JSRZGH')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delBookJSById($JS){
		$sql = "delete from book_js where js_id = $JS";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetBookJSInfoById($id){
		$sql = "select * from book_js where js_id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function UpdateBookJs($JS_id,$dh_id, $JSRQ,$JSYY,$JSJG, $JSRZGH)
	{
		$sql = "update book_js set dh_id='$dh_id'";
		$sql .= ", JSRQ='$JSRQ'";
		$sql .= ", JSYY='$JSYY'";
		$sql .= ", JSJG='$JSJG'";
		$sql .= ", JSRZGH='$JSRZGH'";
		$sql .= " where js_id = $JS_id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
