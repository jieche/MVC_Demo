<?php
class BookJYController extends BaseController{

	function IndexAction(){
	$obj = ModelFactory::M('BookJYModel');
		// $data1 = $obj->GetAllBookJY();	//是一个二维数组
		//$data2 = $obj->GetUserCount();	//是一个数字
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

		$data1 = $obj->GetAllBookJY($offset,$length);	//是一个二维数组
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_jy_list.html';
	}
	function ShowAllBookJYAction(){
		$obj = ModelFactory::M('BookJYModel');
		$data1 = $obj->GetAllBookJY();	//是一个二维数组
		//$data2 = $obj->GetUserCount();	//是一个数字
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_jy_list.html';
	}
	//添加新编目的图书界面
	function ShowFormAction()
	{
		include VIEW_PATH . 'book_jy_add.html';
	}
	//添加图书--数据提交
	function AddBookJYAction(){
		//接收表单数据：
		$dh_id = $_POST['dh_id'];
		$JYRQ = $_POST['JYRQ'];
		$JYR_id = $_POST['JYR_id'];
		$GHRQ = $_POST['GHRQ'];
		$BZ = $_POST['BZ'];
		$obj = ModelFactory::M('BookJYModel');
		$result = $obj->InsertBookJY($dh_id, $JYRQ,$JYR_id,$GHRQ, $BZ);
		$this->GotoUrl('添加借阅信息成功！', '?c=BookJY&a=Index', 3 );
	}
	function DelAction(){
		$jy_id = $_GET['jy_id'];
		$obj = ModelFactory::M('BookJYModel');
		$result = $obj->delBookJYById($jy_id);
		$this->GotoUrl('删除成功！', '?c=BookJY&a=Index', 6 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$jy_id = $_GET['jy_id'];
		$obj = ModelFactory::M('BookJYModel');
		$data = $obj->GetBookJYInfoById($jy_id);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'book_jy_info.html';
	}
	function EditAction(){
		$jy_id = $_GET['jy_id'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('BookJYModel');
		$book = $obj->GetBookJYInfoById($jy_id);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'book_jy_edit.html';
	}
	function UpdateBookJYAction(){
		//接收表单数据：
		$jy_id = $_POST['jy_id'];
		$dh_id = $_POST['dh_id'];
		$JYRQ = $_POST['JYRQ'];
		$JYR_id = $_POST['JYR_id'];
		$GHRQ = $_POST['GHRQ'];
		$BZ = $_POST['BZ'];

		$obj = ModelFactory::M('BookJYModel');
		$result = $obj->UpdateBookJY($jy_id,$dh_id, $JYRQ,$JYR_id,$GHRQ, $BZ);
		$this->GotoUrl('修改订购图书成功！', '?c=BookJY&a=Index', 3 );
	}

}
