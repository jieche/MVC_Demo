<?php
class UserController extends BaseController{
	function DetailAction(){
		//获取一个用户的信息
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$data = $obj->GetUserInfoById($id);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'userInfo.html';
	}
	function ShowFormAction(){
		include VIEW_PATH . 'form_view.html';
	}
	function AddUserAction(){
		//接收表单数据：
		$user_name = $_POST['username'];
		$user_pass = $_POST['password'];
		$age = $_POST['age'];
		$edu = $_POST['xueli'];
		$aihao = $_POST['aihao'];	//这是数组，需要额外处理
		$xingqu = implode(",", $aihao);//将数组的所有项，用英文逗号","连接起来
		$from = $_POST['from'];

		$obj = ModelFactory::M('UserModel');
		$result = $obj->InsertUser($user_name, $user_pass,$age,$edu, $xingqu,$from);
		//echo "<font color=red></font>";
		//echo "<a href='?'>返回</a>";
		//有了基础控制器类后，使用这一行代替上两行
		$this->GotoUrl('添加用户成功！', '?c=User&a=Index', 3 );
	}
	function DelAction(){
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$result = $obj->delUserById($id);
		//echo "<font color=red>删除成功！</font>";
		//echo "<a href='?'>返回</a>";
		//有了基础控制器类后，使用这一行代替上两行
		$this->GotoUrl('删除成功！', '?c=User&a=Index', 6 );
	}
	function IndexAction(){
		//$obj_user = new UserModel();	//这一行使用下一行代替
		$obj = ModelFactory::M('UserModel');
		// $data1 = $obj_user->GetAll();	//是一个二维数组
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
		include VIEW_PATH . 'showAllUser_view.html';
	}
	function EditAction(){
		$id = $_GET['id'];
		//从数据库中取出该用户的所有数据信息：
		$obj_user = ModelFactory::M('UserModel');
		$user = $obj_user->GetUserInfoById($id);
		//兴趣数据，需要单独处理
		$aihao = explode(",", $user['xingqu']);//这里，将这种字符串数据"排球,篮球,足球"
											//使用指定的字符(,)，去分割为一个数组
		include VIEW_PATH . 'user_form_view.html';
	}
	function UpdateUserAction(){
		//接收表单数据：
		$id = $_POST['id'];
		$user_name = $_POST['username'];
		$user_pass = $_POST['password'];
		$age = $_POST['age'];
		$edu = $_POST['xueli'];
		$aihao = $_POST['aihao'];	//这是数组，需要额外处理
		$xingqu = implode(",", $aihao);//将数组的所有项，用英文逗号","连接起来
		$from = $_POST['from'];

		$obj = ModelFactory::M('UserModel');
		$result = $obj->UpdateUser($id, $user_name, $user_pass,$age,$edu, $xingqu,$from);
		//echo "<font color=red>修改用户成功！</font>";
		//echo "<a href='?'>返回</a>";
		//有了基础控制器类后，使用这一行代替上两行
		$this->GotoUrl('修改用户成功！', '?c=User&a=Index' );
	}
}
