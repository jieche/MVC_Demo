<?php
class BookController extends BaseController{

	function FrameAction(){
		
		include VIEW_PATH . 'index.html';
	}
	function IndexAction(){
		//$obj_user = new UserModel();	//这一行使用下一行代替
		$obj = ModelFactory::M('BookModel');
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

		$data1 = $obj->GetAllBook($offset,$length);	//是一个二维数组
		//载入视图文件，以显示该2份数据：
		include VIEW_PATH . 'book_list.html';
	}
	function ShowAllBookAction(){
		// $obj = ModelFactory::M('BookModel');
		// $data1 = $obj->GetAllBook();	//是一个二维数组
		// //$data2 = $obj->GetUserCount();	//是一个数字
		// //载入视图文件，以显示该2份数据：
		// include VIEW_PATH . 'book_list.html';

	}
	function EditAction(){
		$TSBH = $_GET['TSBH'];
		//从数据库中取出该用户的所有数据信息：
		$obj = ModelFactory::M('BookModel');
		$book = $obj->GetBookInfoById($TSBH);
		//兴趣数据，需要单独处理
		
		include VIEW_PATH . 'book_edit.html';
	}
	function UpdateBookAction(){
		//接收表单数据：
		$TSBH = $_POST['TSBH'];

		$TSTXM = $_POST['TSTXM'];
		$ZBT = $_POST['ZBT'];
		$BLBT = $_POST['BLBT'];
		$FBT = $_POST['FBT'];
		$JSGJZ = $_POST['JSGJZ'];
		$CBH = $_POST['CBH'];
		$DYZZ = $_POST['DYZZ'];
		$QTZZ = $_POST['QTZZ'];
		$JG = $_POST['JG'];


		$WXLXM = $_POST['WXLXM'];
		$ZDM = $_POST['ZDM'];
		$FLH = $_POST['FLH'];

		$ZGYZM = $_POST['ZGYZM'];

		$YZM = $_POST['YZM'];
		$KB = $_POST['KB'];
		$YS = $_POST['YS'];
		$BC = $_POST['BC'];
		$FJMC = $_POST['FJMC'];
		$CSMC = $_POST['CSMC'];
		$CSBZ = $_POST['CSBZ'];
		$CBS = $_POST['CBS'];
		$CBSJBM = $_POST['CBSJBM'];

		$CBD = $_POST['CBD'];
		$CBRQ = $_POST['CBRQ'];
		$FXDW = $_POST['FXDW'];
		$TSZTM = $_POST['TSZTM'];
		$BZ = $_POST['BZ'];
		$obj = ModelFactory::M('BookModel');
		$result = $obj->UpdateBook($TSBH,$TSTXM, $ZBT,$BLBT,$FBT, $JSGJZ,$CBH,$DYZZ,$QTZZ,$JG,$WXLXM,$ZDM,$FLH,$ZGYZM,$YZM,$KB,$YS,$BC,$FJMC,$CSMC,$CSBZ,$CBS,$CBSJBM,$CBD,$CBRQ,$FXDW,$TSZTM,$BZ);
		$this->GotoUrl('修改图书信息成功！', '?', 2 );
	}
	function DetailAction(){
		//获取一个用户的信息
		$TSBH = $_GET['TSBH'];
		$obj = ModelFactory::M('BookModel');
		$data = $obj->GetBookInfoById($TSBH);

		//显示到“一个用户的视图”中
		include VIEW_PATH . 'book_info.html';
	}
	function ShowFormAction(){
		include VIEW_PATH . 'book_add.html';
	}
	function DelAction(){
		$TSBH = $_GET['TSBH'];
		$obj = ModelFactory::M('BookModel');
		$result = $obj->delBookById($TSBH);
		$this->GotoUrl('删除成功！', '?', 6 );
	}
	function AddBookAction(){
		//接收表单数据：
		$TSTXM = $_POST['TSTXM'];
		$ZBT = $_POST['ZBT'];
		$BLBT = $_POST['BLBT'];
		$FBT = $_POST['FBT'];
		$JSGJZ = $_POST['JSGJZ'];
		$CBH = $_POST['CBH'];
		$DYZZ = $_POST['DYZZ'];
		$QTZZ = $_POST['QTZZ'];
		$JG = $_POST['JG'];


		$WXLXM = $_POST['WXLXM'];
		$ZDM = $_POST['ZDM'];
		$FLH = $_POST['FLH'];

		$ZGYZM = $_POST['ZGYZM'];

		$YZM = $_POST['YZM'];
		$KB = $_POST['KB'];
		$YS = $_POST['YS'];
		$BC = $_POST['BC'];
		$FJMC = $_POST['FJMC'];
		$CSMC = $_POST['CSMC'];
		$CSBZ = $_POST['CSBZ'];
		$CBS = $_POST['CBS'];
		$CBSJBM = $_POST['CBSJBM'];

		$CBD = $_POST['CBD'];
		$CBRQ = (string)$_POST['YYYY'].".".(string)$_POST['MM'];//+"."+$_POST['DD'];
		$FXDW = $_POST['FXDW'];
		$TSZTM = $_POST['TSZTM'];
		$BZ = $_POST['BZ'];
		$obj = ModelFactory::M('BookModel');
		$result = $obj->InsertBook($TSTXM, $ZBT,$BLBT,$FBT, $JSGJZ,$CBH,$DYZZ,$QTZZ,$JG,$WXLXM,$ZDM,$FLH,$ZGYZM,$YZM,$KB,$YS,$BC,$FJMC,$CSMC,$CSBZ,$CBS,$CBSJBM,$CBD,$CBRQ,$FXDW,$TSZTM,$BZ);
		$this->GotoUrl('添加图书成功！', '?', 3 );
	}
	function SearchFAction(){
		include VIEW_PATH . 'book_search_f.html';
	}
	function SearchAction(){
		$Search = $_POST['Sea'];
		$obj = ModelFactory::M('BookModel');
		$data1 = $obj->Search($Search);
		include VIEW_PATH . 'book_search.html';
	}
}
