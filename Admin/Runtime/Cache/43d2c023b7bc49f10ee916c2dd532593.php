<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/script/treeTable/vsStyle/jquery.treeTable.css"/>
    <link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>树表控件</title>
        <script type="text/javascript" src="__PUBLIC__/script/jquery.js"></script>
        <script src="__PUBLIC__/script/treeTable/jquery.treeTable.js" type="text/javascript"></script>
        <style type="text/css">
body {
	background: #FFF
}</style>
        <script type="text/javascript">
        $(function(){
            var option = {
                theme:'vsStyle',
                expandLevel : 1,
                onSelect : function($treeTable, id) {
                    window.console && console.log('onSelect:' + id);
                }

            };
            $('#treeTable1').treeTable(option);

            option.theme = 'default';
            $('#treeTable2').treeTable(option);
        });
        </script>
    </head>
    <body>
    <div id="contentWrap">
	<!--表格控件 -->
  <div id="widget table-widget">
    <div class="pageTitle"><a href="__URL__/index">添加栏目</a></div>
    <div class="pageColumn">
      <div class="pageButton"></div>
            <table id="treeTable1" style="width:100%">
              <thead>
        <th width="25"><input class="select-all" name="" type="checkbox" value="" /></th>
          <th width="">栏目编号</th>
          <th width="">栏目名称</th>
          <th width="">上级栏目</th>
          <th width="10%">操作</th>
            </thead>
        <tbody>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "0"): ?><tr id="<?php echo ($vo["col_id"]); ?>">
                <td><span controller="true"></span></td>
                <td><?php echo ($vo["col_id"]); ?></td>
                <td><a href="__URL__/index?id=<?php echo ($vo["col_id"]); ?>"><?php echo ($vo["col_name"]); ?></a></td>
                <td><?php echo ($vo["col_sid"]); ?></td>
                <td><a href="__URL__/index?id=<?php echo ($vo["col_id"]); ?>"><img src="__PUBLIC__/images/icon/edit2.png" width="16" height="16" /></a></td>
              </tr><?php endif; ?>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(($vo["col_id"]) == $vo1["col_sid"]): ?><tr id="<?php echo ($vo1["col_id"]); ?>" pid="<?php echo ($vo["col_id"]); ?>">
                  <td><span controller="true"></span></td>
                  <td><?php echo ($vo1["col_id"]); ?></td>
                  <td><a href="__URL__/index?id=<?php echo ($vo1["col_id"]); ?>"><?php echo ($vo1["col_name"]); ?></a></td>
                  <td><?php echo ($vo1["col_sid"]); ?></td>
                  <td><a href="__URL__/index?id=<?php echo ($vo1["col_id"]); ?>"><img src="__PUBLIC__/images/icon/edit2.png" width="16" height="16" /></a></td>
                </tr><?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
            </table>            
   </div>
  </div><!-- #widget -->
</div>
</body>
</html>