<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index() {
		$this->head ();
		$mc = new Model ( "column" );
		// 这里掉用会计服务
		$tempcol = $mc->where ( "cl_sid=2" )->select ();
		$this->getarticle($tempcol, "kuaijifuwu");
		// 这里调用税收服务
		$tempcol = $mc->where ( "cl_sid=3" )->select ();
		$this->getarticle($tempcol, "suishoufuwu");
		//这里调用新闻动态
		$tempcol = $mc->where ( "cl_id=8" )->select ();
		$this->getarticle($tempcol, "xinwendongtai");
		//融资服务
		$tempcol = $mc->where ( "cl_id=4" )->select ();
		$this->getarticle($tempcol, "rongzhifuwu");
		//加载友情链接
		$ml=new Model("link");
		$this->assign("link",$ml->select());
		$this->display ();
	}
	
	// 这个是加载网站设置和栏目的
	public function head() {
		$m = new Model ( "webset" );
		$this->assign ( "webset", $m->where ( "web_id=1" )->find () );
		$m = new Model ( "column" );
		$this->assign ( "column", $m->select () );
	}
	/*
	 * 这个添加留言的
	 */
	public function addmess() {
		$m = new Model ( "message" );
		$data ["me_name"] = $_POST ["me_name"];
		$data ["me_phone"] = $_POST ["me_phone"];
		$data ["me_type"] = $_POST ["me_type"];
		$data ["me_type2"] = $_POST ["me_type2"];
		$data ["me_ind"] = $_POST ["me_ind"];
		$data ["me_time"] = date ( "Y-m-d h:i:s" );
		if ($m->add ( $data ) > 0) {
			$this->success ( "好的留言成功" );
		} else {
			$this->error ( "不要意思请联系技术员" );
		}
	}
	/**
	 * 这个是一个辅助方法就是给一组栏目id然后返回文章
	 * @param 一个栏目组 $tempcol
	 * @param 前台数据名称 $name
	 */
	public function getarticle($tempcol, $name) {
		$m = new Model ( "article" );
		$tempsql = null;
		for ($i=0;$i<count($tempcol);$i++)
		{
			if ($i == 0) {
				$tempsql = $tempcol [$i] ["col_id"];
			} else {
				$tempsql = "," . $tempcol [$i] ["col_id"];
			}
		}
		$this->assign ( $name, $m->where ( "art_col in (" . $tempsql . ")" )->order ( "art_time desc" )->limit ( 1, 5 )->select () );
	}
}