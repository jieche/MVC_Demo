<?php
class BookDGController extends BaseController{

	function IndexAction(){
	$obj = ModelFactory::M('BookDGModel');
		// $data1 = $obj->GetAllBookDG();	//是一个二维数组
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

		$data1 = $obj->GetAllBookDG($offset,$length);	//是一个二维数组

		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_dg_list.html';
	}
	//添加新订购的图书界面
	function ShowFormAction()
	{
		include VIEW_PATH . 'book_dg_add.html';
	}
	//添加图书--数据提交
	function AddBookDGAction(){
		//接收表单数据：
		// $DGH = $_POST['DGH'];
		$TSBH = $_POST['TSBH'];
		$YDJG = $_POST['YDJG'];
		$YDCS = $_POST['YDCS'];
		$YDRQ = $_POST['YDRQ'];


		$HDFSM = $_POST['HDFSM'];
		$id = $_POST['id'];
		$BZ = $_POST['BZ'];
		
		$obj = ModelFactory::M('BookDGModel');
		$result = $obj->InsertBookDG($TSBH, $YDJG,$YDCS,$YDRQ, $HDFSM,$id,$BZ);
		$this->GotoUrl('添加订购图书成功！', '?c=BookDG&a=Index', 3 );
	}
	function DelAction(){
		$DGH = $_GET['DGH'];
		$obj = ModelFactory::M('BookDGModel');
		$result = $obj->delBookDGById($DGH);
		$this->GotoUrl('删除成功！', '?c=BookDG&a=Index', 6 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$DGH = $_GET['DGH'];
		$obj = ModelFactory::M('BookDGModel');
		$data = $obj->GetBookDGInfoById($DGH);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'book_dg_info.html';
	}
	function EditAction(){
		$DGH = $_GET['DGH'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('BookDGModel');
		$book = $obj->GetBookDGInfoById($DGH);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'book_dg_edit.html';
	}
	function UpdateBookDGAction(){
		//接收表单数据：
		$DGH = $_POST['DGH'];
		$TSBH = $_POST['TSBH'];
		$YDJG = $_POST['YDJG'];
		$YDCS = $_POST['YDCS'];
		$YDRQ = $_POST['YDRQ'];


		$HDFSM = $_POST['HDFSM'];
		$id = $_POST['id'];
		$BZ = $_POST['BZ'];
		$obj = ModelFactory::M('BookDGModel');
		$result = $obj->UpdateBookDG($DGH,$TSBH, $YDJG,$YDCS,$YDRQ, $HDFSM,$id,$BZ);
		$this->GotoUrl('修改订购图书成功！', '?c=BookDG&a=Index', 3 );
	}
	
}
