
/*快捷服务*/
$(document).ready(function(){
	$(window).scroll(function(){
		var st = $(document).scrollTop(), winh = $(window).height();
		if(st>0)
		{
			$('.topnew').show();
		}
		else
		{
			$('.topnew').hide();
		}
		if (!window.XMLHttpRequest) {
			$('.quick_link').css("top", st + 500);    
		}
	});
});
/*快捷服务end*/
/*新乐语*/
$(document).ready(function(){

	var st = $(document).scrollTop(), winh = $(window).height();
	if (!window.XMLHttpRequest) {
			$('.leyu').css({
				position:'absolute',
				top:st //+ 150
			});
		}
    $(window).scroll(function(){
			st=$(document).scrollTop();
		if (!window.XMLHttpRequest) {
			 $('.leyubox').animate({"top":st + 90},1);
			 //$('.leyu').css({"top":st + 150});
		 }
	});
    $('.shouctrl').click(function(){
        $('#doyoo_panel').hide();
        if($('.leyu').is(':visible'))
        {
            $('.leyu').hide();
            $('.leyubox').css({
                'width':30
            });
            $('.shou').css('background','url("/images/mfcx_1.png") no-repeat scroll 100% 0 transparent');
            var time=1*1000*60;
            setTimeout(showleyu,time);
        }
        else
        {
            $('.leyu').show();
            $('.leyubox').css({
                'width':168
            });
            $(this).css('background','url("/images/mfcx.png") no-repeat scroll 100% 0 transparent');
        }
        function showleyu(){
            $('.leyubox').css({
                'width':168
            });
            $('.leyu').show();
            $('.shou').css('background','url("/images/mfcx.png") no-repeat scroll 100% 0 transparent');
            movedivForIe6();
        }
        movedivForIe6();
    });
    $('.linkset').live('mouseover',function(){
        $('.leyu').hide();
        $('.leyubox').css({
            'width':168
        });
        $(this).css('background','url("/images/kjfw_1.png") no-repeat scroll 100% 0 transparent');
        $('.newquick_link').show();
        movedivForIe6();
        $('.shou').css('background','url("/images/mfcx_1.png") no-repeat scroll 100% 0 transparent');
    });
    $('.linkset').live('mouseout',function(){
        $('.leyu').show();
        movedivForIe6();
        $(this).css('background','url("/images/kjfw.png") no-repeat scroll 100% 0 transparent');
        $('.newquick_link').hide();
        $('.shou').css('background','url("/images/mfcx.png") no-repeat scroll 100% 0 transparent');
    });
    $('.newquick_link').live('mouseover',function(){
        $('.leyu').hide();
        $('.leyubox').css({
            'width':168
        });
        $('.linkset').css('background','url("/images/kjfw_1.png") no-repeat scroll 100% 0 transparent');
        $('.newquick_link').show();
        $('.shou').css('background','url("/images/mfcx_1.png") no-repeat scroll 100% 0 transparent');
        movedivForIe6();
    });
    $('.newquick_link').live('mouseout',function(){
        $('.leyu').show();
        $('.linkset').css('background','url("/images/kjfw.png") no-repeat scroll 100% 0 transparent');
        $('.newquick_link').hide();
        $('.shou').css('background','url("/images/mfcx.png") no-repeat scroll 100% 0 transparent');
    });
    $('.topnew').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 120);
    });
    $('.topnew').live('mouseout',function(){
        $(this).css('background','url("/images/top-h.png") no-repeat scroll 0% 0 transparent');
    });
    $('.topnew').live('mouseover',function(){
        $(this).css('background','url("/images/top-h.png") no-repeat scroll 100% 0 transparent');
    });
});
function movedivForIe6(){
     if($('.leyu').is(':visible'))
     {
        $('.leyuboxleft').css({
        'position':'absolute',
        'right':118,
        'top':0
        });
        
     }
     else if($('.newquick_link').is(':visible'))
     {
        $('.leyuboxleft').css({
        'position':'absolute',
        'right':118,
        'top':0
        });
     }
     else
     {
        $('.leyuboxleft').css({
        'position':'absolute',
        'right':0,
        'top':0
        });
     }
}
/*新乐语*/
