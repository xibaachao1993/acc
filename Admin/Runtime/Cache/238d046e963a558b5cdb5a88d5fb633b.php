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
  <div id="widget table-widget">
    <div class="pageTitle">查看留言</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <table>
        <thead>
        <th width="25"><input class="select-all" name="" type="checkbox" value="" /></th>
          <th width="">留言编号</th>
          <th width="">姓名</th>
          <th width="">电话</th>
          <th width="">服务类型</th>
          <th width="">服务类型</th>
          <th width="">行业</th>
          <th width="">留言时间</th>
          <th width="10%">操作</th>
            </thead>
        <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="checkBox"><input name="ids[]" type="checkbox" value="<?php echo ($vo["me_id"]); ?>" /></td>
            <td><?php echo ($vo["me_id"]); ?></td>
            <td><?php echo ($vo["me_name"]); ?></td>
            <td><?php echo ($vo["me_phone"]); ?></td>
            <td><?php echo ($vo["me_type"]); ?></td>
            <td><?php echo ($vo["me_type2"]); ?></td>
            <td><?php echo ($vo["me_ind"]); ?></td>
            <td><?php echo ($vo["me_time"]); ?></td>
            <td><a href="__URL__/delmes?id=<?php echo ($vo["me_id"]); ?>">
            <img src="__PUBLIC__/images/icon/del.png" width="16" height="16" /></a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          <tr class=" ">
          <td colspan="9">
          <?php echo ($page); ?></td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div><!-- #widget -->
</div>


</body>
</html>