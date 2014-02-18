<?php
class ColumnAction extends Action{
	public function index()
	{
		$m=new Model("column");
		$this->assign("all",$m->where("col_sid=0")->select());
		if ($_GET["id"]!=null || $_GET["id"]!="")
		{
			$this->assign("one",$m->where("col_id=%d",$_GET["id"])->find());
		}
		$this->display();
	}
	public function getcol()
	{
		$m=new Model("column");
		$this->assign("list",$m->select());
		$this->display();
	}
	public function updatecol()
	{
		$data["col_name"]=$_POST["col_name"];
		$data["col_sid"]=$_POST["col_sid"];
		$data["col_des"]=$_POST["col_des"];
		$m=new Model("column");
		if ($_POST["id"]!=null||$_POST[""]!="") {
			if($m->where("col_id=%d",$_POST["id"])->save($data)>0)
			{
				$this->success("好的修改成功");
			}else
			{
				$this->error("修改失败，联系技术员");
			}
		}else
		{
			if ($m->add($data))
			{
				$this->success("好的添加成功");
			}else
			{
				$this->error("不好意思添加失败");
			}
		}
	}
	public function delcol()
	{
		$m=new Model("column");
		if($_GET["id"]!=""||$_GET["id"]!=null)
		{
			if ($m->where("col_id=%d",$_GET["id"])->delete()>0)
			{
				$this->success("好的删除成功");
			}else
			{
				$this->error("不要意思修改失败，联系技术员");
			}
		}
	}
}