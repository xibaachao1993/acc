<?php
class WebsetAction extends Action
{
	public function index()
	{
		$m=new Model("webset");
		$this->assign("webset",$m->where("web_id=1")->find());
		$this->display();
	}
	public function updateweb()
	{
		$m=new Model("webset");
		$data["web_title"]=$_POST["web_title"];
		$data["web_key"]=$_POST["web_key"];
		$data["web_des"]=$_POST["web_des"];
		if($m->where("web_id=1")->save($data)>0)
		{
			$this->success("好的修改成功");
		}else
		{
			$this->error("不好意思联系技术员");
		}		
	}
	public function getmes()
	{
		
		$User = M('message'); // 实例化User对象
		import('ORG.Util.Page');// 导入分页类
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->order('me_time DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	public function delmes()
	{
		$m=new Model("message");
		echo $_GET["id"];
		if ($_GET["id"]!="")
		{
			if($m->where("me_id=%d",$_GET["id"])->delete()>0)
			{
				$this->success("好的修改成功");
			}else
			{
				//$this->display("index");
				$this->error("不好意思，联系管理员");
			}
		}
	}
	public function getlink()
	{
		$User = M('link'); // 实例化User对象
		import('ORG.Util.Page');// 导入分页类
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	public function addlink()
	{
		$m=new Model("link");
		if ($_GET["id"]!=""||$_GET["id"]!=null)
		{
		 $this->assign("one",$m->where("link_id=%d",$_GET["id"])->find());
		}
		$this->display();
	}
	public function linkupdate()
	{
		$m=new Model("link");
		$data["link_title"]=$_POST["link_title"];
		$data["link_image"]=$_POST["link_image"];
		$data["link_address"]=$_POST["link_address"];
		if ($_POST["id"]!="")
		{
			if ($m->where("link_id=%d",$_POST["id"])->save($data)>0)
			{
				$this->success("好的修改成功");
			}else
			{
				//$this->display("index");
			$this->error("不好意思请联系技术员");
			}
		}else{
			if($m->add($data)>0){
				$this->success("好的添加成功");
			}else
			{
				$this->error("不好意思修改失败");
			}
		}
	}
	public function dellink()
	{
		if ($_GET["id"]!=""|| $_GET["id"]!=null)
		{
			$m=new Model("link");
			if ($m->where("link_id=%d",$_GET["id"])->delete()>0)
			{
				$this->success("好的删除成功");
			}else
			{
				$this->error("不好意思，删除失败");
			}
		}
	}
}