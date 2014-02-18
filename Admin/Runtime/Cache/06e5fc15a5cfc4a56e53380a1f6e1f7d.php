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
</style>
</head>

<body>
<div id="contentWrap">
	<!--表格控件 -->
  <div id="widget table-widget">
    <div class="pageTitle"><a href="__URL__/addlink">添加友情链接</a></div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <table>
        <thead>
        <th width="25"><input class="select-all" name="" type="checkbox" value="" /></th>
          <th width="">友情连接编号</th>
          <th width="">友情链接名字</th>
          <th width="">图片</th>
          <th width="">地址</th>
          <th width="10%">操作</th>
            </thead>
        <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="checkBox"><input name="ids[]" type="checkbox" value="" /></td>
            <td><?php echo ($vo["link_id"]); ?></td>
            <td><?php echo ($vo["link_title"]); ?></td>
            <td><img src="<?php echo ($vo["link_image"]); ?>" alt="<?php echo ($vo["link_title"]); ?>" /></td>
            <td><a href="<?php echo ($vo["link_address"]); ?>" target="_blank"><?php echo ($vo["link_address"]); ?></a></td>
            <td><a href="__URL__/addlink?id=<?php echo ($vo["link_id"]); ?>"><img src="__PUBLIC__/images/icon/edit2.png" width="16" height="16" /></a>
            <a href="__URL__/dellink?id=<?php echo ($vo["link_id"]); ?>"><img src="__PUBLIC__/images/icon/del.png" width="16" height="16" /></a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
          <tr class=" ">
            <td colspan="6" class="checkBox"><?php echo ($page); ?></td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div><!-- #widget -->
</div>


</body>
</html>