<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo ($one["art_title"]); echo ($webset["web_title"]); ?></title>
<meta name="description" content="<?php echo ($webset["web_des"]); ?>" />
<meta name="keywords" content="<?php echo ($one["art_title"]); ?>,<?php echo ($webset["web_key"]); ?>" />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/js/jquery_v1.6.2.js" language="javascript" type="text/javascript"></script>
<script src="__PUBLIC__/js/conmon.js" language="javascript" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/jquery.cookie.js"></script>
</head>
<body>
<div class="bodybg">
  <div class="head"> <span class="fl"><img src="__PUBLIC__/images/img3.png" border="0"  alt="<?php echo ($webset["web_title"]); ?>" /> </span> <span class="fr" style="text-align:right;"> <img src="__PUBLIC__/images/img4.png" /> </span> </div>
  <div class="daohang">
  <div class="dh1"><a href="/" id="dh1"><img src="__PUBLIC__/images/img6.png" class="img1" /><img src="__PUBLIC__/images/img6_2.png" /></a></div>
  <div class="dh1"><a href="/caishuifuwu/" id="dh1"><img src="__PUBLIC__/images/img7.png" class="img1" /><img src="__PUBLIC__/images/img7_2.png" /></a>
    <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show s2">
          <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "2"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="dh1"><a href="/sszc/" id="dh1"><img src="__PUBLIC__/images/img9.png" class="img1" /><img src="__PUBLIC__/images/img9_2.png" /></a>
  <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show">
               <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "3"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div></td>
        </tr>
      </table>
    </div>
  
  
  
  
  </div> 
  <div class="dh1"><a href="/zonghebishui/" id="dh1"><img src="__PUBLIC__/images/img11.png" class="img1" /><img src="__PUBLIC__/images/img11_2.png" /></a>
    <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show">
               <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "4"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="dh1"><a href="/shuiwufaku/" id="dh1"><img src="__PUBLIC__/images/img12.png" class="img1" /><img src="__PUBLIC__/images/img12_2.png" /></a>
    <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show">
               <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "5"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="dh1"><a href="/servers/" id="dh1"><img src="__PUBLIC__/images/img13.png" class="img1" /><img src="__PUBLIC__/images/img13_2.png" /></a>
  <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show">
               <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "6"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div></td>
        </tr>
      </table>
    </div>
  
  </div>
  
  <div class="dh1"><a href="/kuaijishixi/" id="dh1"><img src="__PUBLIC__/images/img14.png" class="img1" /><img src="__PUBLIC__/images/img14_2.png" /></a>
  <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show">
               <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "7"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div></td>
        </tr>
      </table>
    </div>
  
  </div>
  <div class="dh1"><a href="/abouts/" id="dh1"><img src="__PUBLIC__/images/img15.png" class="img1" /><img src="__PUBLIC__/images/img15_2.png" /></a>
  <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show">
               <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "8"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="dh1"><a href="/news/" id="dh1"><img src="__PUBLIC__/images/img16.png" class="img1" /><img src="__PUBLIC__/images/img16_2.png" /></a>
  <div class="dh2">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><div class="show">
               <?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["col_sid"]) == "9"): ?><div><a href='#'><?php echo ($vo["col_name"]); ?></a></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div></td>
        </tr>
      </table>
    </div>
  </div>
 
</div>
  <div class="banner" style="overflow:hidden;">
  <div class="banner_1" style="padding:0px;"> 
    <script language='javascript'> 
linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width=739;
var swf_height=256;
//文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
var configtg='0xffffff|0|0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';
var files = "";
var links = "";
var texts = "";
//这里设置调用标记
linkarr[1] = "http://www.lanrentuku.com";
picarr[1]  = "__PUBLIC__/images/01.jpg";
linkarr[2] = "http://www.lanrentuku.com";
picarr[2]  = "__PUBLIC__/images/02.jpg";
linkarr[3] = "http://www.lanrentuku.com";
picarr[3]  = "__PUBLIC__/images/03.jpg";
linkarr[4] = "http://www.lanrentuku.com";
picarr[4]  = "__PUBLIC__/images/04.jpg";
 
for(i=1;i<picarr.length;i++){
if(files=="") files = picarr[i];
else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
if(links=="") links = linkarr[i];
else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
if(texts=="") texts = textarr[i];
else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="images/bcastr3.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
document.write('<embed src="__PUBLIC__/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
</script> 
  </div>
  <div class="sq_from" style="width:208px; float:right;">
    <div class="lksq_title1"><span style="float:left;">快速服务通道</span></div>
    <div class="lksq_info1" style="width:206px;">
      <form action="__URL__/addmess"  method="post">
        <div class="from3">
          <div class="from_name2"><span>您的姓名：</span>
            <input name='me_name' id='xm' type="text" class="form_nx3" onFocus="focusInputEle(this)" onBlur="blurInputEle(this)" defaultVal="请输入真实姓名" value="请输入真实姓名" />
          </div>
          <div class="from_name2"><span>手机号码：</span>
            <input name='me_phone' id='sj' type="text" class="form_nx3" onFocus="focusInputEle(this)" onBlur="blurInputEle(this)" defaultVal="请输入有效联系方式" value="请输入有效联系方式"/>
          </div>
          <div class="from_name2" style="width:240px;"><span style="margin-top:4px;">服务类型：</span>
            <SELECT name='me_type' id='fwlx' style="width:64px;">
              <OPTION selected></OPTION>
            </SELECT>
            <SELECT name='me_type2' id='fwlr' style="width:60px;">
              <option value="" selected="selected">请选择</option>
              <OPTION></OPTION>
            </SELECT>
          </div>
          <div class="from_name2"><span>所属行业：</span>
            <input name='me_ind' id='sshy' type="text" class="form_nx3" onFocus="focusInputEle(this)" onBlur="blurInputEle(this)" defaultVal="请输入行业" value="请输入行业"/>
          </div>
          <div class="from_name2">
            <input type="submit" name="submit" value="" class="from_tj1" />
          </div>
          <div class="from_name_bc"> <span> </span> <br />
            <span> </span> </div>
        </div>
      </form>
    </div>
  </div>
</div>
<style type="text/css">
.banner{width:960px; margin:auto; margin-top:10px;}
.banner_1{float:left; width:739px; height:256px;}
.lksq_title1{float:left; width:209px; background:url(__PUBLIC__/static/images/sqback.jpg) repeat-x; height:35px; line-height:35px; font-size:14px; font-family:"微软雅黑"; color:#fff; padding-left:10px;}
.lksq_title1 .ggy{float:right; margin-right:10px; font-size:12px;}
.lksq_info1{float:left; width:207px; border:1px solid #e1e1e1; border-top:none; padding-bottom:10px;}
.from3{float:left; width:207px;margin-top:6px; display:inline;}
.from_name2{float:left; width:230px; margin-left:10px; color:#333; margin-top:7px; display:inline;}
.from_name_bc{float:left; width:210px; line-height:22px; margin-top:5px; display:inline; text-align:center;}
.from_name_bc span{color:#d90000;}
.from_name2 span{float:left; margin-top:6px; display:inline;}
.form_nx3{ float: left;width: 122px;height: 21px;border: 1px solid #ccc; color:#999; padding-left:5px; line-height:21px;}
.form_nx4{ float: left; width:86px; height:22px; background:url(__PUBLIC__/static/images/sqback1.jpg) no-repeat; border:none; color:#999; line-height:22px; padding-left:5px;}
.from_tj1{float:left; margin-left:50px; display:inline; background:url(__PUBLIC__/static/images/sqback3.jpg) no-repeat; width:65px; height:22px; border:0px;}
</style>
  <script>
function focusInputEle(o) {
            if (o.value == getAttributeValue(o, 'defaultVal')) {
                o.value = '';
                o.style.color = "#000000";
            }
        }
        function blurInputEle(o) {
            if (o.value == '') {
                o.value = getAttributeValue(o, 'defaultVal');
                o.style.color = "#999999";
            }
        }
		function getAttributeValue(o, key) {
            if (!o.attributes) return null;
            var attr = o.attributes;
            for (var i = 0; i < attr.length; i++) {
                if (key.toLowerCase() == attr[i].name.toLowerCase())
                    return attr[i].value;
            }
            return null;
        }
</script> 
  <script language="javascript" >
/*  
**    ====================================
**    类名：CLASS_LIANDONG_YAO  
**    功能：多级连动菜单  
**    作者：YAODAYIZI     
**/  	
  function CLASS_LIANDONG_YAO(array)
  {
   //数组，联动的数据源
  	this.array=array; 
  	this.indexName='';
  	this.obj='';
  	//设置子SELECT
	// 参数：当前onchange的SELECT ID，要设置的SELECT ID
      this.subSelectChange=function(selectName1,selectName2)
  	{
  	//try
  	//{
    var obj1=document.all[selectName1];
    var obj2=document.all[selectName2];
    var objName=this.toString();
    var me=this;
    obj1.onchange=function()
    {
    	me.optionChange(this.options[this.selectedIndex].value,obj2.id)
    }
  	}
  	//设置第一个SELECT
	// 参数：indexName指选中项,selectName指select的ID
  	this.firstSelectChange=function(indexName,selectName)  
  	{
  	this.obj=document.all[selectName];
  	this.indexName=indexName;
  	this.optionChange(this.indexName,this.obj.id)
  	}
  // indexName指选中项,selectName指select的ID
  	this.optionChange=function (indexName,selectName)
  	{
    var obj1=document.all[selectName];
    var me=this;
    obj1.length=0;
    obj1.options[0]=new Option("请选择",'');
    for(var i=0;i<this.array.length;i++)
    {	
    	if(this.array[i][1]==indexName)
    	{
    	//alert(this.array[i][1]+" "+indexName);
      obj1.options[obj1.length]=new Option(this.array[i][2],this.array[i][0]);
    	}
    }
  	}	
  }
  </script>
  <div style="width:960px; margin:auto; height:10px"></div>
  <div class="clear"></div>
  <script language="javascript">
//例子1-------------------------------------------------------------
//数据源
var array=new Array();

   array[0]=new Array("业务","根目录","业务");
  array[1]=new Array("会计服务","业务","会计服务");
  array[2]=new Array("税收服务","业务","税收服务");
  array[3]=new Array("融资服务","业务","融资服务");
  array[4]=new Array("工商代理","业务","工商代理");
  array[5]=new Array("一般纳税人服务","业务","一般纳税人服务");
 array[22]=new Array("其他会计服务","业务","其他会计服务");
 
  array[6]=new Array("投诉","根目录","投诉");
  array[7]=new Array("服务质量","投诉","服务质量");
  array[8]=new Array("办理费用","投诉","办理费用");
  array[9]=new Array("办理时间","投诉","办理时间");
  array[10]=new Array("其他原因","投诉","其他原因");
  
  array[11]=new Array("招聘","根目录","招聘");
  array[12]=new Array("有相关经验","招聘","有相关经验");
  array[13]=new Array("无相关经验","招聘","无相关经验");
  array[14]=new Array("新人应聘","招聘","新人应聘");
  array[15]=new Array("其他人才","招聘","其他人才");
      
  array[16]=new Array("合作","根目录","合作"); //数据格式 ID，父级ID，名称
  array[17]=new Array("业务合作","合作","业务合作");
  array[18]=new Array("广告合作","合作","广告合作");
  array[19]=new Array("培训合作","合作","培训合作");
  array[20]=new Array("渠道合作","合作","渠道合作");
  array[21]=new Array("其他合作","合作","其他合作");
  //--------------------------------------------
  //这是调用代码
  var liandong=new CLASS_LIANDONG_YAO(array) //设置数据源
  liandong.firstSelectChange("根目录","fwlx"); //设置第一个选择框
  liandong.subSelectChange("fwlx","fwlr");
  </script>
  <div class="main">
    <div class="left_2">
      <div class="lm_1">
        <div class="title"><img src="__PUBLIC__/images/img55.jpg" /></div>
        <ul class="texts">
        
        <?php if(is_array($columns)): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href='#'><?php echo ($vo["col_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
          
        </ul>
      </div>
      <div class="lm_2">
        <div class="title">服务热线</div>
        <div style="padding:0px; text-align:center;"> 
          <img src="__PUBLIC__/images/img35.jpg" /> </div>
      </div>
      
    </div>
    <div class="right_2">
      <div class="title"><a href='http://localhost/'>首页</a> > <a href='/caishuifuwu/'>财税服务</a> > <a href='/caishuifuwu/dailijizhang/'>代理记账</a> > </div>
      <div class="texts">        
        <div class="clear_both mb14"></div>
       
        <div class="clear_both mb14"></div>
        <div>
          <table width="100%" height="20" cellspacing="0" cellpadding="0">
            <tr>
              <td width="20%"></td>
              <td width="60%" align="center" class="Coffee fs14"><h1><?php echo ($one["art_title"]); ?></h1></td>
              <td width="20%" align="right"></td>
            </tr>
          </table>
          <div class="clear_both2 mb9" style="height:8px;"></div>
          <div style="line-height:24px;">
          <?php echo ($one["art_body"]); ?>
          </div>
          <div class="clear_both2 mb14" style="height:8px;"></div>
          <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
            <?php if(empty($top)): ?><td class="Coffee">上一篇：<a href='#'>没有了</a></td>
        
         <?php else: ?>
           <td class="Coffee">上一篇：<a href=''><?php echo ($top["art_title"]); ?></a></td><?php endif; ?>
            
            
              
                          <?php if(empty($next)): ?><td class="Coffee">上一篇：<a href='#'>没有了</a></td>
        
         <?php else: ?>
           <td class="Coffee">上一篇：<a href=''><?php echo ($next["art_title"]); ?></a></td><?php endif; ?>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="clear_both mb19"></div>
  </div>
  <div class="clear"></div>
</div>
</body>
</html>