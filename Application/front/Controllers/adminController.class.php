<?php
class adminController extends BaseController{

	
	function IndexAction(){
		$obj = ModelFactory::M('adminModel');
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
		include VIEW_PATH . 'admin_list.html';
	}
	function ShowAllAction(){
		$obj = ModelFactory::M('adminModel');
		$data1 = $obj->GetAll();	//是一个二维数组
		include VIEW_PATH . 'admin_list.html';
	}
	function EditAction(){
		$TSBH = $_GET['id'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('adminModel');
		$book = $obj->GetInfoById($TSBH);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'admin_edit.html';
	}
	function UpdateAction(){
		//接收表单数据：
		$id = $_POST['id'];
		$admin_name = $_POST['admin_name'];
		$admin_pass = $_POST['admin_pass'];
		$obj = ModelFactory::M('adminModel');
		$result = $obj->Update($id,$admin_name, $admin_pass);
		$this->GotoUrl('修改信息成功！', '?c=admin&a=Index', 2 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$id = $_GET['id'];
		$obj = ModelFactory::M('adminModel');
		$data = $obj->GetInfoById($id);
		//显示到“一个用户的视图”中
		include VIEW_PATH . 'admin_info.html';
	}
	function ShowFormAction(){
		include VIEW_PATH . 'admin_add.html';
	}
	function DelAction(){
		$id = $_GET['id'];
		$obj = ModelFactory::M('adminModel');
		$result = $obj->delById($id);
		$this->GotoUrl('删除成功！', '?c=admin&a=Index', 6 );
	}
	function AddAction(){
		//接收表单数据：
		// $id = $_POST['id'];
		$admin_name = $_POST['admin_name'];
		$admin_pass = $_POST['admin_pass'];
		$obj = ModelFactory::M('adminModel');
		$result = $obj->Insert($admin_name, $admin_pass);
		$this->GotoUrl('添加成功！', '?c=admin&a=Index', 3 );
	}
}
