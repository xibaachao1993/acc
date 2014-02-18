<?php
/**
 * 文件名(AricleAction.php)
 * 功能描述（这个页面用于显示所有页面的）
 * @author steve <xibaachao@live.com>
 * @version 1.0
 * @author 西坝阿超
 * @create time 2014/2/24 19:41:12
 */
class ArticleAction extends IndexAction {
	/*
	 * $colid 栏目id $article 文章id $m 栏目控制器 $ma 文章控制器
	 */
	public function index() {
		$colid = $_GET ["id"];
		$artid = $_GET ["aid"];
		$m = new Model ( "column" );
		$ma = new Model ( "article" );
		$tempcol = $m->where ( "col_id=%d", $colid )->find (); // 这个表示当前栏目
		$this->head ();
		if ($tempcol ["col_sid"] == 0) {
			$this->judge ( $tempcol );
			$this->column ( $colid );
		} else {
			$this->judge ( $tempcol );
			$this->article ( $artid );
		}
	}
	/*
	 * 功能：这个方法是调用所有页面右侧的栏目（不包含主页） $column 一个了栏目对象 $m 栏目控制器
	 */
	public function judge($column) {
		$m = new Model ( "column" );
		if ($column ["col_sid>0"]) {
			/* 这里表示这个column对象是一个小类 */
			$this->assign ( "columns", $m->where ( "col_sid=%d", $column ["col_sid"] )->select () );
		} else {
			/* 这里表示column对象是一个大类 */
			$this->assign ( "columns", $m->where ( "col_sid=%d", $column ["col_id"] )->select () );
		}
	}
	/* 这里表示调用一个大类的页面  */
	public function column($id) {
		$m = new Model ( "column" );
		$temp = $m->where ( "col_id=%d", $id )->find ();
		$this->assign ( "one", $temp );
		$this->display ( "column" );
	}
	/* 这里表示调用一个文章的页面 */
	public function article($id) {
		// 这里是调用文章
		$m = new Model ( "article" );
		$this->assign ( "one", $m->where ( "art_id=%d", $id )->find () );
		// 这里是调用上一篇文章
		$top = $m->where ( "art_id<'" . $id . "'" )->order ( 'art_time desc' )->limit ( '0,1' )->find ();
		$this->assign ( "top", $top );
		// 这里是调用下一篇文章
		$next = $m->where ( "art_id>'" . $id . "'" )->order ( 'art_time desc' )->limit ( '0,1' )->find ();
		$this->assign ( "next", $next );
		$this->display ( "index" );
	}
	/* 这个方法是的显示 */
	public function place()
	{
		
	}
}
?>