<?php
class MainAction extends Action{
	public function index()
	{
		if ($_SESSION["user"]!=null)
		{
		$this->display();
		}else
		{
			$this->error("不好意思发生错误","Index");
		}
	}
}