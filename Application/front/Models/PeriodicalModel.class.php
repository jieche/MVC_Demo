<?php
class PeriodicalModel  extends BaseModel{
	
	function GetAll($offset,$length){
		$sql = "select * from periodical limit {$offset},{$length};";
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetCount(){
		$sql = "select count(*) as c from periodical;";
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function Insert($QKTXM, $QKZWMC,$QKYWMC,$CBH, $BJB,$ZB,$DJ,$CKNY,$NH,$JH,$QH,$ZQH,$FLH,$ZGYZM,$YZM,$QKLBM,$QKZTM)
	{
		$sql = "insert into periodical (QKTXM, QKZWMC,QKYWMC,CBH, BJB,ZB,DJ,CKNY,NH,JH,QH,ZQH,FLH,ZGYZM,YZM,QKLBM,QKZTM)values(";
		$sql .= "'$QKTXM', '$QKZWMC','$QKYWMC','$CBH', '$BJB','$ZB','$DJ','$CKNY','$NH','$JH','$QH','$ZQH','$FLH','$ZGYZM','$YZM','$QKLBM','$QKZTM')";
		$result = $this->_dao->exec($sql);
		return $result;
	}
	function delById($id)
	{
		$sql = "delete from periodical where QKBH = $id";
		$data = $this->_dao->exec($sql);
		return $data;
	}
	function GetInfoById($id)
	{
		$sql = "select * from periodical where QKBH = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	function Update($id,$QKTXM, $QKZWMC,$QKYWMC,$CBH, $BJB,$ZB,$DJ,$CKNY,$NH,$JH,$QH,$ZQH,$FLH,$ZGYZM,$YZM,$QKLBM,$QKZTM)
	{
		$sql = "update periodical set ";
		
		$sql .= "QKTXM='$QKTXM'";
		$sql .= ", QKZWMC='$QKZWMC'";
		$sql .= ", QKYWMC='$QKYWMC'";
		$sql .= ", CBH='$CBH'";
		$sql .= ", BJB='$BJB'";
		$sql .= ", ZB='$ZB'";
		$sql .= ", DJ='$DJ'";
		$sql .= ", CKNY='$CKNY'";
		$sql .= ", NH='$NH'";
		$sql .= ", JH='$JH'";
		$sql .= ", QH='$QH'";
		$sql .= ", ZQH='$ZQH'";
		$sql .= ", FLH='$FLH'";
		$sql .= ", ZGYZM='$ZGYZM'";
		$sql .= ", YZM='$YZM'";
		$sql .= ", QKLBM='$QKLBM'";
		$sql .= ", QKZTM='$QKZTM'";
		$sql .= " where QKBH = $id";
		$result = $this->_dao->exec($sql);
		return $result;
	}
}
