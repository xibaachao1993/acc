<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/javascript/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/DatePicker/WdatePicker.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/kindeditor/themes/default/default.css"/>
<script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor.js"></script>
<script>
KindEditor.ready(function(K) {
		window.editor = K.create('#body');
	});
	$(function(){
		$("#temp").val(<?php echo ($one["art_col"]); ?>);
    })
    </script>
<style type="text/css">
body {
	background:#FFF
}
input{border:1px solid}
textarea{height:400px;}
</style>
</head>

<body>
<div id="contentWrap">
  <div id="widget table-widget">
    <div class="pageTitle">添加文章</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <form action="__URL__/updatearticle" method="post">
      <input type="hidden" name="id" value="<?php echo ($one["art_id"]); ?>" />
      <table>
      	<tr>
        	<td style="text-align:right">文章标题</td>
            <td style="text-align:left"><input type="text" name="art_title" value="<?php echo ($one["art_title"]); ?>" /></td>
            <td></td>
        </tr>
              	<tr>
        	<td style="text-align:right">所属栏目</td>
            <td style="text-align:left">
            	<select name="art_col" id="temp">
                <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["col_id"]); ?>"><?php echo ($vo["col_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
            <td></td>
        </tr>
           <tr>
        	<td style="text-align:right">文章内容</td>
            <td style="text-align:left"><textarea id="body" name="art_body"><?php echo ($one["art_body"]); ?></textarea></td>
            <td></td>
        </tr>
              	<tr>
        	<td style="text-align:right">发布时间</td>
            <td style="text-align:left"><input type="text" name="art_time" value="<?php echo ($one["art_time"]); ?>" onClick="WdatePicker()"/></td>
            <td></td>
        </tr>
              	<tr>
        	<td colspan="3"><input type="submit" value="提交" /></td>
        </tr>
      </table>
      </form>
    </div>
  </div><!-- #widget -->
</div>


</body>
</html>