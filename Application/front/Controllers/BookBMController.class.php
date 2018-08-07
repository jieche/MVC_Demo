<?php
class BookBMController extends BaseController{

	function IndexAction(){
	$obj = ModelFactory::M('BookBMModel');
		// $data1 = $obj->GetAllBookBM();	//是一个二维数组
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

		$data1 = $obj->GetAllBookBM($offset,$length);	//是一个二维数组
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_bm_list.html';
	}
	function ShowAllBookBMAction(){
		$obj = ModelFactory::M('BookBMModel');
		$data1 = $obj->GetAllBookBM();	//是一个二维数组
		//$data2 = $obj->GetUserCount();	//是一个数字
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_bm_list.html';
	}
	//添加新编目的图书界面
	function ShowFormAction()
	{
		include VIEW_PATH . 'book_bm_add.html';
	}
	//添加图书--数据提交
	function AddBookBMAction(){
		//接收表单数据：
		$dh_id = $_POST['dh_id'];
		$PJH = $_POST['PJH'];
		$JCH = $_POST['JCH'];
		$BMRQ = $_POST['BMRQ'];
		$GCD = $_POST['GCD'];
		$obj = ModelFactory::M('BookBMModel');
		$result = $obj->InsertBookBM($dh_id, $PJH,$JCH,$BMRQ, $GCD);
		$this->GotoUrl('添加编目图书成功！', '?c=BookBM&a=Index', 3 );
	}
	function DelAction(){
		$bm_id = $_GET['bm_id'];
		$obj = ModelFactory::M('BookBMModel');
		$result = $obj->delBookBMById($bm_id);
		$this->GotoUrl('删除成功！', '?c=BookBM&a=Index', 6 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$bm_id = $_GET['bm_id'];
		$obj = ModelFactory::M('BookBMModel');
		$data = $obj->GetBookBMInfoById($bm_id);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'book_bm_info.html';
	}
	function EditAction(){
		$bm_id = $_GET['bm_id'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('BookBMModel');
		$book = $obj->GetBookBMInfoById($bm_id);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'book_bm_edit.html';
	}
	function UpdateBookBMAction(){
		//接收表单数据：
		$bm_id = $_POST['bm_id'];
		$dh_id = $_POST['dh_id'];
		$PJH = $_POST['PJH'];
		$JCH = $_POST['JCH'];
		$BMRQ = $_POST['BMRQ'];
		$GCD = $_POST['GCD'];

		$obj = ModelFactory::M('BookBMModel');
		$result = $obj->UpdateBookBM($bm_id,$dh_id, $PJH,$JCH,$BMRQ, $GCD);
		$this->GotoUrl('修改订购图书成功！', '?c=BookBM&a=Index', 3 );
	}
}
