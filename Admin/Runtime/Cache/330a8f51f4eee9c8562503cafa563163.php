<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/javascript/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('tbody tr:odd').addClass("trLight");
		
		$(".select-all").click(function(){
			if($(this).attr("checked")){
				$(".checkBox input[type=checkbox]").each(function(){
					$(this).attr("checked", true);  
					});
				}else{
					$(".checkBox input[type=checkbox]").each(function(){
					$(this).attr("checked", false);  
					});
				}
			});
		
		})
</script>
<style type="text/css">
body {
	background:#FFF
}
input{border:1px solid;}
.l{width:400px;}
textarea{border:1px solid; width:400px; height:60px;}
</style>
</head>

<body>
<div id="contentWrap">
  <div id="widget table-widget">
    <div class="pageTitle">网站设置</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <form action="__URL__/updateweb" method="post">
		<table cellpadding="0" cellspacing="0">
      	<tr>
        	<td style="text-align:right">网站名字:</td>
            <td style="text-align:left"><input class="l" type="text" name="web_title" value="<?php echo ($webset["web_title"]); ?>" /></td>
            <td width="10"></td>
        </tr>
        <tr>
        	<td style="text-align:right">网站关键字</td>
            <td style="text-align:left"><textarea name="web_key"><?php echo ($webset["web_key"]); ?></textarea></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align:right">网站描述</td>
            <td style="text-align:left"><textarea name="web_des"><?php echo ($webset["web_des"]); ?></textarea></td>
            <td></td>
        </tr>
        <tr>
        	<td colspan="3"><input type="submit" value="提交" /></td>
        </tr>
      </table>
      </form>
    </div>
  </div>
</div>


</body>
</html>