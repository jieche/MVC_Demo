<?php
class PeriodicalZDController extends BaseController{

	function IndexAction(){
		//$obj_user = new UserModel();	//这一行使用下一行代替
		$obj = ModelFactory::M('PeriodicalZDModel');
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
		include VIEW_PATH . 'periodical_zd_list.html';
	}
	function ShowAllAction(){
		$obj = ModelFactory::M('PeriodicalZDModel');
		$data1 = $obj->GetAll();	//是一个二维数组
		//$data2 = $obj->GetUserCount();	//是一个数字
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'periodical_zd_list.html';
	}
	function EditAction(){
		$id = $_GET['QKDGH'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('PeriodicalZDModel');
		$book = $obj->GetInfoById($id);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'periodical_zd_edit.html';
	}
	function UpdateAction(){
		//接收表单数据：
		$QKDGH = $_POST['QKDGH'];

		$QKBH = $_POST['QKBH'];
		$YDJG = $_POST['YDJG'];
		$YDCS = $_POST['YDCS'];
		$YDND = $_POST['YDND'];
		$HDFSM = $_POST['HDFSM'];
		$ZDRZGH = $_POST['ZDRZGH'];
		$BZ = $_POST['BZ'];
	
		$obj = ModelFactory::M('PeriodicalZDModel');
		$result = $obj->Update($QKDGH,$QKBH, $YDJG,$YDCS,$YDND, $HDFSM,$ZDRZGH,$BZ);
		$this->GotoUrl('修改信息成功！', '?c=PeriodicalZD&a=Index', 2 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$id = $_GET['QKDGH'];
		$obj = ModelFactory::M('PeriodicalZDModel');
		$data = $obj->GetInfoById($id);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'periodical_zd_info.html';
	}
	function ShowFormAction(){
		include VIEW_PATH . 'periodical_zd_add.html';
	}
	function DelAction(){
		$id = $_GET['QKBH'];
		$obj = ModelFactory::M('PeriodicalZDModel');
		$result = $obj->delById($id);
		$this->GotoUrl('删除成功！', '?c=PeriodicalZD&a=Index', 6 );
	}
	function AddAction(){
		//接收表单数据：
		//$QKDGH = $_POST['QKDGH'];

		$QKBH = $_POST['QKBH'];
		$YDJG = $_POST['YDJG'];
		$YDCS = $_POST['YDCS'];
		$YDND = $_POST['YDND'];
		$HDFSM = $_POST['HDFSM'];
		$ZDRZGH = $_POST['ZDRZGH'];
		$BZ = $_POST['BZ'];
		$obj = ModelFactory::M('PeriodicalZDModel');
		$result = $obj->Insert($QKBH, $YDJG,$YDCS,$YDND, $HDFSM,$ZDRZGH,$BZ);
		$this->GotoUrl('添加成功！', '?c=PeriodicalZD&a=Index', 3 );
	}
}
