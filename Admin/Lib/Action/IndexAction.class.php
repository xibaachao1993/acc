<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$this->display();
    }
    public function check()
    {
    	$m=new Model("user");
    	$temp=$m->where("user_name='%s' and user_pwd='%s'",$_POST["username"],md5($_POST["userpwd"]))->find();
    	if ($temp["user_id"]>0)
    	{
    		$_SESSION["user"]=$temp;
    		$this->success("好的登陆成功","../Main");
    	}else{
    		$this->error("不好意思登陆失败");
    	}
    }
    
    
}