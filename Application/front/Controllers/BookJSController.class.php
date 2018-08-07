<?php
class BookJSController extends BaseController{

	function IndexAction(){
	$obj = ModelFactory::M('BookJSModel');
		// $data1 = $obj->GetAllBookJS();	//是一个二维数组
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

		$data1 = $obj->GetAllBookJS($offset,$length);	//是一个二维数组
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_js_list.html';
	}
	function ShowAllBookJSAction(){
		$obj = ModelFactory::M('BookJSModel');
		$data1 = $obj->GetAllBookJS();	//是一个二维数组
		//$data2 = $obj->GetUserCount();	//是一个数字
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_js_list.html';
	}
	//添加新编目的图书界面
	function ShowFormAction()
	{
		include VIEW_PATH . 'book_js_add.html';
	}
	//添加图书--数据提交
	function AddBookJSAction(){
		//接收表单数据：
		$dh_id = $_POST['dh_id'];
		$JSRQ = $_POST['JSRQ'];
		$JSYY = $_POST['JSYY'];
		$JSJG = $_POST['JSJG'];
		$JSRZGH = $_POST['JSRZGH'];
		$obj = ModelFactory::M('BookJSModel');
		$result = $obj->InsertBookJS($dh_id, $JSRQ,$JSYY,$JSJG, $JSRZGH);
		$this->GotoUrl('添加减少信息成功！', '?c=BookJS&a=Index', 3 );
	}
	function DelAction(){
		$js_id = $_GET['js_id'];
		$obj = ModelFactory::M('BookJSModel');
		$result = $obj->delBookJSById($js_id);
		$this->GotoUrl('删除成功！', '?c=BookJS&a=Index', 6 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$js_id = $_GET['js_id'];
		$obj = ModelFactory::M('BookJSModel');
		$data = $obj->GetBookJSInfoById($js_id);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'book_js_info.html';
	}
	function EditAction(){
		$js_id = $_GET['js_id'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('BookJSModel');
		$book = $obj->GetBookJSInfoById($js_id);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'book_js_edit.html';
	}
	function UpdateBookJSAction(){
		//接收表单数据：
		$js_id = $_POST['js_id'];
		$dh_id = $_POST['dh_id'];
		$JSRQ = $_POST['JSRQ'];
		$JSYY = $_POST['JSYY'];
		$JSJG = $_POST['JSJG'];
		$JSRZGH = $_POST['JSRZGH'];

		$obj = ModelFactory::M('BookJSModel');
		$result = $obj->UpdateBookJS($js_id,$dh_id, $JSRQ,$JSYY,$JSJG, $JSRZGH);
		$this->GotoUrl('修改减少信息成功！', '?c=BookJS&a=Index', 3 );
	}

}
