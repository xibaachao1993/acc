// JavaScript Document
  $(function(){
					 var webtitle = "_顶呱呱会计服务"; 
					 var url = getCookies("url");
					 var titles = getCookies("titles");
					
					 var seturl="",settitle="";
					 var nums = 6;
					 var listlink = "";
					
					 
					 if(url == null ||titles == null||typeof(url)=="undefined"||typeof(titles)=="undefined"){
						  
					 setCookies("url",window.location.href);
					 setCookies("titles",document.title);
					 
						 $("#fwlc").html("<li style='height:50px;'>对不起，您还未在顶呱呱留下足迹，您可以在此查看您的浏览记录，返回您感兴趣的页面！</li>");
					
					 return false;
					 }
					 
					 urlarr = url.split("$$");
					 titlesarr = titles.split("$$");
					 
					
					 if(urlarr.length != titlesarr.length){
						 	
						 	$.cookie("url", null,{ path: '/' });
							$.cookie("titles",null,{ path: '/' });
							setCookies("url",window.location.href);
							setCookies("titles",document.title);
							return false;
						 }
						
					 if(urlarr.length >= nums ||titlesarr.length >= nums){
						 	for(var i=0;i<nums-1;i++){
									if(seturl == ""){
											seturl = urlarr[i];
											settitle = titlesarr[i];
										}else{
											seturl = seturl + "$$" + urlarr[i];	
											settitle = settitle + "$$" + titlesarr[i];	
										}
								}
							 seturl = window.location.href + "$$" + seturl;
					 		 settitle = document.title  + "$$" + settitle;	
							
						 }else{
							 	
								seturl = window.location.href + "$$" + url;
					 			settitle = document.title  + "$$" + titles;
								
							 }
					 setCookies("url",seturl);
					 setCookies("titles",settitle);
					  
					for(var i=0;i<urlarr.length;i++){
						temptitle = titlesarr[i];
							listlink += "<li>"+(i+1)+"&nbsp;<a href=\""+urlarr[i]+"\" title='"+temptitle.replace(webtitle,"")+"'>"+temptitle+"</a></li>";
							
						}
					
					 if($("#fwlc").length > 0) $("#fwlc").html(listlink);
					 return false;

				  })
				  
				  function getCookies(Names){
					  	return $.cookie(Names);
					  }
				  function setCookies(Names,value,expie){

					  	if (typeof(value) == "undefined"||typeof(Names)=="undefined")
						{ 
						return false;
						}
						
					  	if(typeof(expie) == "undefined") expie = 10;
				
					  	$.cookie(Names,value,{path: '/', expires:expie});
					  }	  		  