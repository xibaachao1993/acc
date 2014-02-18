<?php
class ArticleAction extends Action {
	public function index() {
		$m=new Model("article");
		$t=new Model("column");
		if ($_GET["id"]!=null || $_GET["id"]!="")
		{
			$this->assign("one",$m->where("art_id=%d",$_GET["id"])->find());
		}
		$this->assign("all",$t->where("col_sid>0")->select());
		$this->display();
	}
		
	public function getarticle()
	{
		$User = M('article'); // 实例化User对象
		import('ORG.Util.Page');// 导入分页类
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->join(' k_column ON k_article.art_col = k_column.col_id')->order('art_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	public function updatearticle()
	{
		$m=new Model("article");
		$data["art_title"]=$_POST["art_title"];
		$data["art_body"]=$_POST["art_body"];
		$data["art_col"]=$_POST["art_col"];
		$data["art_time"]=$_POST["art_time"];
		if ($_POST["id"]!=""||$_POST["id"]!=null) {
			if($m->where("art_id=%d",$_POST["id"])->save($data)>0)
			{
				$this->success("好的修改成功");
			}else
			{
				$this->error("请联系技术员");
			}
		}else
		{
			if ($m->add($data)>0)
			{
				$this->success("好的添加成功");
			}else
			{
				$this->error("请联系技术员");
			}
		}
	}
	public function delarticle()
	{
		$m=new Model("article");
		if ($_GET["id"]!=null || $_GET["id"]!="")
		{
			if ($m->where("art_id=%d",$_GET["id"])->delete()>0)
			{
				$this->success("好的删除成功");
			}else
			{
				//$this->display("index");
				$this->error("请联系技术员");
			}
		}
	}
}