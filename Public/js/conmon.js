// JavaScript Document

function Show(obj1,obj2,obj3){
var speed=20
var scroll_begin = document.getElementById(obj2);
var scroll_end = document.getElementById(obj3);
var scroll_div = document.getElementById(obj1);
scroll_end.innerHTML=scroll_begin.innerHTML
function Marquee(){
    if(scroll_end.offsetWidth-scroll_div.scrollLeft<=0)
      scroll_div.scrollLeft-=scroll_begin.offsetWidth
    else
      scroll_div.scrollLeft++
}
var MyMar=setInterval(Marquee,speed)
scroll_div.onmouseover=function() {clearInterval(MyMar)}
scroll_div.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
}

function ScrollTop2(obj1,obj2){
var speed=2000
var lianjie=document.getElementById(obj1);
var lianjie1=document.getElementById(obj2);
function Marquee01(){
	if(lianjie1.offsetHeight-lianjie.scrollTop<=lianjie.offsetHeight+5)
		lianjie.scrollTop = 0;
	else{
		lianjie.scrollTop = lianjie.scrollTop + lianjie.offsetHeight;
	}
};
var MyMar=setInterval(Marquee01,speed);
lianjie.onmouseover=function() {clearInterval(MyMar)};
lianjie.onmouseout=function() {MyMar=setInterval(Marquee01,speed)}
}

function _hdm(obj1,obj2){
	$(obj1).hover(
		function(){
			$(obj1).removeClass("nuw");
			$(this).addClass("nuw");
			var id = $(obj1).index(this);
			$(obj2).hide();
			$(obj2).eq(id).show();
		}
	)
}

$(function(){
	$(".daohang .dh1").hover(
		function(){
			$(this).addClass("nuw");
			$(this).find(".dh2").show();
		}
		,
		function(){
			$(this).removeClass("nuw");
			$(this).find(".dh2").hide();
		}
	)
})



