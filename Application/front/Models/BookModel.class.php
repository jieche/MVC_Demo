<?php
class BookModel  extends BaseModel{
	function GetAllBook($offset,$length){
		$sql = "select * from books limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from books;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function InsertBook($TSTXM, $ZBT,$BLBT,$FBT, $JSGJZ,$CBH,$DYZZ,$QTZZ,$JG,$WXLXM,$ZDM,$FLH,$ZGYZM,$YZM,$KB,$YS,$BC,$FJMC,$CSMC,$CSBZ,$CBS,$CBSJBM,$CBD,$CBRQ,$FXDW,$TSZTM,$BZ)
	{
		$sql = "insert into books (TSTXM, ZBT,BLBT,FBT, JSGJZ,CBH,DYZZ,QTZZ,JG,WXLXM,ZDM,FLH,ZGYZM,YZM,KB,YS,BC,FJMC,CSMC,CSBZ,CBS,CBSJBM,CBD,CBRQ,FXDW,TSZTM,BZ)values(";
		$sql .= "'$TSTXM', '$ZBT','$BLBT','$FBT', '$JSGJZ','$CBH','$DYZZ','$QTZZ','$JG','$WXLXM','$ZDM','$FLH','$ZGYZM','$YZM','$KB','$YS','$BC','$FJMC','$CSMC','$CSBZ','$CBS','$CBSJBM','$CBD','$CBRQ','$FXDW','$TSZTM','$BZ')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delBookById($TS){
		$sql = "delete from books where TSBH = $TS";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetBookInfoById($id){
		$sql = "select * from books where TSBH = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function UpdateBook($id,$TSTXM, $ZBT,$BLBT,$FBT, $JSGJZ,$CBH,$DYZZ,$QTZZ,$JG,$WXLXM,$ZDM,$FLH,$ZGYZM,$YZM,$KB,$YS,$BC,$FJMC,$CSMC,$CSBZ,$CBS,$CBSJBM,$CBD,$CBRQ,$FXDW,$TSZTM,$BZ){
		$sql = "update books set TSTXM='$TSTXM'";
		
		$sql .= ", ZBT='$ZBT'";
		$sql .= ", BLBT='$BLBT'";
		$sql .= ", FBT='$FBT'";
		$sql .= ", JSGJZ='$JSGJZ'";
		$sql .= ", CBH='$CBH'";
		$sql .= ", DYZZ='$DYZZ'";
		$sql .= ", QTZZ='$QTZZ'";
		$sql .= ", JG='$JG'";
		$sql .= ", WXLXM='$WXLXM'";
		$sql .= ", ZDM='$ZDM'";
		$sql .= ", FLH='$FLH'";
		$sql .= ", ZGYZM='$ZGYZM'";
		$sql .= ", YZM='$YZM'";
		$sql .= ", KB='$KB'";
		$sql .= ", YS='$YS'";
		$sql .= ", BC='$BC'";
		$sql .= ", FJMC='$FJMC'";
		$sql .= ", CSMC='$CSMC'";
		$sql .= ", CSBZ='$CSBZ'";
		$sql .= ", CBS='$CBS'";
		$sql .= ", CBSJBM='$CBSJBM'";
		$sql .= ", CBD='$CBD'";
		$sql .= ", CBRQ='$CBRQ'";
		$sql .= ", FXDW='$FXDW'";
		$sql .= ", TSZTM='$TSZTM'";
		$sql .= ", BZ='$BZ'";
		$sql .= " where TSBH = $id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function Search($str)
	{
		// SELECT * FROM [user] WHERE u_name LIKE '%三%'
		// $sql = "select * from books where ZBT LIKE '%$name%';";
		//成功解决报错问题
		$sql = "select * from books where ZBT LIKE '%$str%' ";

		$sql .="union  ";
		$str=(int)$str;
		$sql .= "select * from books where TSBH = $str ";

		
		// 　　if(is_int($str))
		// 　　if(is_numeric($str))
		//     {
		// 		$sql = "select * from books where TSBH = $str ";
		// 　　}
		// 　　else
		// 　　{
		// 		$sql = "select * from books where ZBT LIKE '%$str%';";
		// 　　}
	
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
}
