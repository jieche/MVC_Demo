<?php
class PeriodicalController extends BaseController{

	function IndexAction(){
		//$obj_user = new UserModel();	//这一行使用下一行代替
		$obj = ModelFactory::M('PeriodicalModel');
		// $data1 = $obj->GetAll();	//是一个二维数组
		$data2 = $obj->GetCount();	//是一个数字
		//获取页码
		$page=isset($_GET['page'])?$_GET['page']:1;
		//设定每页显示的数据量
		$length=3;
		//求出分页偏移量
		$offset=($page-1)*$length;
		//总页数
		$pages=ceil($data2/$length);
		//求出上一页和下一页对应的页码
		$prev=$page>1?$page-1:1;
		$next=$page<$pages?$page+1:$pages;

		$data1 = $obj->GetAll($offset,$length);	//是一个二维数组
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'periodical_list.html';
	}
	function ShowAllAction(){
		$obj = ModelFactory::M('PeriodicalModel');
		$data1 = $obj->GetAll();	//是一个二维数组
		//$data2 = $obj->GetUserCount();	//是一个数字
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'periodical_list.html';
	}
	function EditAction(){
		$QKBH = $_GET['QKBH'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('PeriodicalModel');
		$book = $obj->GetInfoById($QKBH);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'periodical_edit.html';
	}
	function UpdateAction(){
		//接收表单数据：
		$QKBH = $_POST['QKBH'];

		$QKTXM = $_POST['QKTXM'];
		$QKZWMC = $_POST['QKZWMC'];
		$QKYWMC = $_POST['QKYWMC'];
		$CBH = $_POST['CBH'];
		$BJB = $_POST['BJB'];
		$ZB = $_POST['ZB'];
		$DJ = $_POST['DJ'];
		$CKNY = $_POST['CKNY'];
		$NH = $_POST['NH'];


		$JH = $_POST['JH'];
		$QH = $_POST['QH'];
		$ZQH = $_POST['ZQH'];

		$FLH = $_POST['FLH'];

		$ZGYZM = $_POST['ZGYZM'];
		$YZM = $_POST['YZM'];
		$QKLBM = $_POST['QKLBM'];
		$QKZTM = $_POST['QKZTM'];
		
		$obj = ModelFactory::M('PeriodicalModel');
		$result = $obj->Update($QKBH,$QKTXM, $QKZWMC,$QKYWMC,$CBH, $BJB,$ZB,$DJ,$CKNY,$NH,$JH,$QH,$ZQH,$FLH,$ZGYZM,$YZM,$QKLBM,$QKZTM);
		$this->GotoUrl('修改信息成功！', '?c=Periodical&a=Index', 2 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$id = $_GET['QKBH'];
		$obj = ModelFactory::M('PeriodicalModel');
		$data = $obj->GetInfoById($id);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'periodical_info.html';
	}
	function ShowFormAction(){
		include VIEW_PATH . 'periodical_add.html';
	}
	function DelAction(){
		$id = $_GET['QKBH'];
		$obj = ModelFactory::M('PeriodicalModel');
		$result = $obj->delById($id);
		$this->GotoUrl('删除成功！', '?c=Periodical&a=Index', 6 );
	}
	function AddAction(){
		//接收表单数据：
		//$QKBH = $_POST['QKBH'];

		$QKTXM = $_POST['QKTXM'];
		$QKZWMC = $_POST['QKZWMC'];
		$QKYWMC = $_POST['QKYWMC'];
		$CBH = $_POST['CBH'];
		$BJB = $_POST['BJB'];
		$ZB = $_POST['ZB'];
		$DJ = $_POST['DJ'];
		$CKNY = $_POST['CKNY'];
		$NH = $_POST['NH'];


		$JH = $_POST['JH'];
		$QH = $_POST['QH'];
		$ZQH = $_POST['ZQH'];

		$FLH = $_POST['FLH'];

		$ZGYZM = $_POST['ZGYZM'];
		$YZM = $_POST['YZM'];
		$QKLBM = $_POST['QKLBM'];
		$QKZTM = $_POST['QKZTM'];
		$obj = ModelFactory::M('PeriodicalModel');
		$result = $obj->Insert($QKTXM, $QKZWMC,$QKYWMC,$CBH, $BJB,$ZB,$DJ,$CKNY,$NH,$JH,$QH,$ZQH,$FLH,$ZGYZM,$YZM,$QKLBM,$QKZTM);
		$this->GotoUrl('添加成功！', '?c=Periodical&a=Index', 3 );
	}
}
