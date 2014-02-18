<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/javascript/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/kindeditor/themes/default/default.css"/>
<script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor.js"></script>
<script src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
	$(function(){
		$("#temp").val(<?php echo ($one["col_sid"]); ?>);
	})
	KindEditor.ready(function(K) {
		window.editor = K.create('#body');
	});
</script>
<style type="text/css">
body {
	background:#FFF
}
input{
	border:1px solid}
	textarea{height:400px;}
</style>
</head>

<body>
<div id="contentWrap">
  <div id="widget table-widget">
    <div class="pageTitle">添加/修改栏目</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <form action="__URL__/updatecol" method="post">
      <table>
      	<tr>
        	<td style="text-align:right">栏目名称</td>
            <td style="text-align:left"><input type="text" name="col_name" value="<?php echo ($one["col_name"]); ?>" /></td>
            <Td></Td>
        </tr>
        <tr>
        	<td style="text-align:right">上级栏目</td>
            <td style="text-align:left"><select id="temp" name="col_sid">
            	<option value="0">顶级栏目</option>
                <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["col_id"]); ?>"><?php echo ($vo["col_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select></td>
            <Td></Td>
        </tr>
        <tr>
        	<td style="text-align:right">栏目描述</td>
            <td style="text-align:left"><textarea id="body" name="col_des"><?php echo ($one["col_des"]); ?></textarea></td>
            <Td></Td>
        </tr>
        <TR>
        	<td colspan="3"><input type="submit" value="提交" /></td>
        </TR>
      </table>
      </form>
    </div>
  </div><!-- #widget -->
</div>


</body>
</html>