<?php
include ('./inc/aik.config.php');
include ('./inc/init.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<!--[if lt IE 9]>
<script src="static/js/html5shiv.min.js"></script>
<script src="static/js/respond.min.js"></script>
<![endif]-->
<link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">				
<link href="static/css/swiper.min.css" rel="stylesheet" type="text/css">		
<link href="static/css/iconfont.css" rel="stylesheet" type="text/css">
<link href="static/css/blackcolor.css" rel="stylesheet" type="text/css">
<link href="static/css/style.min.css" rel="stylesheet" type="text/css">
<script src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>		
<script src="static/js/function.js"></script>
<script type='text/javascript' src="static/js/LazyLoad.js"></script>
<script type='text/javascript' src="static/js/swiper.min.js"></script>
<script type="text/javascript " src="static/js/history.js"></script>
<script src="static/js/masonry.pkgd.js"></script>
<link href="static/css/kkbb.css" rel="stylesheet" type="text/css">	
<link rel="stylesheet" href="static/css/cs1.css">
<link rel="stylesheet" href="static/css/golds.css">
<link href="static/css/gdicon.css" rel="stylesheet" type="text/css">	
<script>
    $(document).ready(function(){
        $(".up-ul a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul a").removeClass("on");
                $this.addClass("on");  
            }  
        });  
	        $(".up-ul2 a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul2 a").removeClass("on");
                $this.addClass("on");  
            }  
        }); 
	        $(".up-ul3 a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul3 a").removeClass("on");
                $this.addClass("on");  
            }  
        }); 
       $(".up-ul4 a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul4 a").removeClass("on");
                $this.addClass("on");  
            }  
        }); 
    });
  </script>
  <style type="text/css">

body{
background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;background: url(<?php echo $aik['logo_ss']?>); 
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;} 
}
</style>
<title><?php echo $aik['title']?><?php echo $aik['sitename']?></title>
 <meta name="keywords" content="智云影音，源码更新QQ群921019449，<?php echo $aik['keywords']?>" />
    <meta name="description" content="智云影音，精品资源QQ群921019449，<?php echo $aik['description']?>" />
<link rel="stylesheet" href="static/css/amazeui.min.css">
<link rel="stylesheet" href="static/css/app.css">
<style type="text/css">
.kuaikuai {
    width: 14.285714286%;
}
</style>
</head>
<body>
<script src="static/js/clipboard.min.js"></script>
<script>
   var clipboard = new Clipboard('.hongbao', {
       text: function () {
          
       return '332nn636VD';
       }
   });
 function changeAction(){
var selectValue=document.getElementById('search_from').value;
document.forms[0].action=selectValue;
}
 function changeActionn(){
var url = document.getElementById('search_fromm').value;
    //更改form的action
    $("#mc-search").attr("action", url);
}
</script>
<link rel="stylesheet" href="static/css/iconfont1.css">
<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo hidden-xs">
					<a class="hidden-sm hidden-xs" href="<?php echo $aik['pcdomain']?>"><img src="<?php echo $aik['logo_dh']?>"></a>
		  			<a class="visible-sm visible-xs" href="./"><img src="<?php echo $aik['pcdomain']?>"></a>											  
				</div>	
	<?php  include 'head.php';?>
</ul>
</li>	
				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>


<div class="container">
<div class="row" style="margin-top:10px"></div>
<div class="row">
<div class="hy-layout clearfix">
  <div class="hy-min-screen clearfix">
    <div class="item clearfix">
      <dl class="clearfix">
        <dt class="text-muted">按资源</dt>
        <dd class="clearfix">
		<div class="up-ul">	
<a href="">全部</a>									  
<a href='' target='_self'>喜剧</a>

<a href='javascript:;' target='_self'>其他</a>

</div>									  
</dd>
      </dl>
      <dl class="cleafix">
        <dt class="text-muted">按类型</dt>
        <dd class="clearfix">
				<div class="up-ul2">	
<a href="./yue.php?m=c_86_s_1_d_1_p_1.html" >全部</a>
				<a href="./yue.php?m=c_86_s_6_d_1_p_2.html">娱乐</a>
				<a href="./yue.php?m=c_98_s_6_d_1_p_1.html">体育</a>
				<a href="./yue.php?m=c_87_s_6_d_1_p_1.html">教育</a>
				<a href="./yue.php?m=c_99_s_6_d_1_p_1.html">游戏</a>
				<a href="./yue.php?m=c_178_s_6_d_1_p_1.htm">文化</a>
				<a href="./yue.php?m=c_98_g_健身_a_6_d_1_p_1.html">健身</a>
				<a href="./yue.php?m=c_94_d_1_s_1_p_1.html">搞笑</a>
				<a href="./yue.php?m=c_98_g_广场舞_s_6_d_1_p_1.html">广场舞</a>  

 </div>
</dd>
      </dl>
     
    </div>
  </div>
</div>


<div class="container">
<div class="row" style="margin-top:0px"></div></div>
		<div class="hy-layout clearfix" style="margin-top: 10px;">
			<div class="hy-switch-tabs active clearfix">
				<span class="text-muted pull-right hidden-xs">如果您喜欢本站请动动小手分享给您的朋友！-或者加入QQ群交流</span>
				<ul class="nav nav-tabs">
					<li class="active"><a href="movie.php">按最新</a></li>
					<li><a href="lb.php">按列表</a></li>
					<li><a href="javascript:history.back()">返回上页</a></li>
				</ul>
			</div>
			<div class="hy-video-list">
				<div class="item">
					<ul class="clearfix"> 
<?php
					if (empty($_GET['m'])) {
						$html = "http://list.youku.com/category/show/c_86_s_1_d_1_p_1.html";
					} else {
						$html = "http://list.youku.com/category/show/" . $_GET["m"];
					}
					$rurl = fileget($html,5);
					$vname = "#<li class=\"yk-col4 mr1\"><div class=\"yk-pack pack-film\"><div class=\"p-thumb\"><a href=\"(.*?)\" title=\"(.*?)\" target=\"_blank\"></a><i class=\"bg\"></i>(<div class=\"p-thumb-tagrt\"><span class=\"vip-free\">VIP</span></div>)?\s*<img class=\"quic\" _src=\"(.*?)\" src=\"(.*?)\" alt=\"(.*?)\" /></div><ul class=\"p-info pos-bottom\"><li class=\"status hover-hide\"><span class=\"p-time \"><i class=\"ibg\"></i><span>(.*?)</span></span></li></ul><ul class=\"info-list\"><li class=\"title\"><a href=\"(.*?)\" title=\"(.*?)\" target=\"_blank\">(.*?)</a></li>(<li class=\"actor\"><em>主讲：</em><a href=\"(.*?)\" target=\"_blank\" title=\"(.*?)\">(.*?)</a></li>)?\s*<li>(.*?)</li></ul></div></li>#";
					preg_match_all($vname, $rurl, $xarr);
					$xbflist = $xarr[1];
					$xname = $xarr[2];
					$ximg = $xarr[4];
					$shijian = $xarr[7];
					$bofang = $xarr[13];
					foreach ($xname as $key => $xvau) {
						$ccb = "./fplay.php?player=".base64_encode($xbflist[$key]).".html";
					?>
					<div class='kuaikuai1 col-sm-3 kuaikuai2'>
<a class='videopic lazy' href='<?php echo $ccb;?>' target='_blank' title='<?php echo $xname[$key];?>' data-original='<?php echo $ximg[$key];?>' style='background: url(image/load.gif) no-repeat; background-position:50% 50%; background-size: cover;'>
<span class='play hidden-xs'></span><span class='score'><?php echo $shijian[$key];?></span></a>
<div class='title'>
<h5 class='text-overflow' style='width: 85%;float: left;'><a href='<?php echo $ccb;?>' target='_blank'><?php echo $xname[$key];?></a></h5><span style='color: #FF7B00;font-size: 15px;margin-top: 7px;position: absolute;'></span>
</div>
<div class='subtitle text-muted text-muted text-overflow hidden-xs'><?php echo $bofang[$key];?></div>
</div><?php } ?>

				</ul>
				</div>
			</div>						
			</div>
			<br>
	</div>
</div>
			<div class="hy-page clearfix">
				<ul class="cleafix">
<?php
	$response = fileget($html,5);
	$response = strstr($response, "<div class=\"yk-pager\">");
	$response = strstr($response, "<div class=\"vault-banner", true);
	$response = str_replace("<div class=\"yk-pager\">", "", $response);
	$response = str_replace("</div>", "", $response);
	$response = str_replace("<span>", "<a>", $response);
	$response = str_replace("<ul class=\"yk-pages\">", "<div monitor-desc='分页' id='js-ew-page' data-block='js-ew-page'  class='ew-page'>", $response);
	$response = str_replace("</ul>", "</div>", $response);
	$response = str_replace("<span class=\"current\">", "<a class=\"on\">", $response);
	$response = str_replace("<li class=\"current\">", "<li class=\"active\">", $response);
	$response = str_replace("</span>", "</a>", $response);
	$response = str_replace("//list.youku.com/category/show/", "yule_", $response);
	$response = str_replace("<a class=\"next\" title=\"下一页\">", "", $response);
	$response = str_replace("上一页", "<", $response);
	$response = str_replace("下一页", ">", $response);
	echo $response;
?>
</ul>
			</div>		
			

	  <div class="container">
<div class="row" style="margin-top:0px"></div></div>
<div class="hy-gototop hidden-sm hidden-xs">
   <ul class="item clearfix">
    <li><a href="./" title="会员中心"><i class="icon iconfont icon-tubiaozhizuomobanyihuifu-"></i></a></li>
    <li><a href="ly/" title="留言求片"><i class="icon iconfont icon-qiu"></i></a></li>
	<li><a href="javascript:()" title="观看记录"><i class="icon iconfont icon-icon-"></i></a><div class="history clearfix" style="width:200px">
				<div class="head">
					<h5 class="margin-0 text-muted">观看历史</h5>
				</div>
<script type="text/javascript ">
					$MH.limit = 8;
					$MH.WriteHistoryBox(200, 170, 'font');
					$MH.recordHistory({
						name: '娱乐频道',
						link: '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>',
						pic: ''
					})
				</script>

			</div>	
			</li>		
    <li><a class="" href="javascript:#" title="扫码手机观看" onclick="ewm()" style="z-index:9999999;"><i class="icon iconfont icon-erweima"></i></a></li> 
    <li class="">
<a href="javascript:()" title="二维码"><i class="icon iconfont icon-erweima"></i></a>
     <div class="code clearfix">
      <p class="margin-0">
	  <img class="pic-responsive" src="image/ewm.png" alt="扫描二维码">
	  </p>
     </div>
	 </li> 
    <li><a data-toggle="tooltip" data-placement="top" class="" href="javascript:scroll(0,0)" title="TOP"><i class="icon iconfont icon-top02"></i></a></li>   
	</ul>
  </div>
<?php  include 'footer.php';?>    
	</div>
	<div style="position:fixed;width:300px;height:350px;top:50%;left:0%;margin-left:-150px;margin-top:-175px;display: none;z-index: 9999999;" id="gbewm" onclick="ewmgb()">
	<div style="text-align:center;line-height: 50px;background-color: #2db2ea;color: #fff;font-size: 20px;font-weight: bold;border-radius: 5px 5px 0px 0px;">扫码二维码，手机观看！</div>
	<img src="image/ewm.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;">
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><font color="#FFFFFF"><span><?php echo $aik['foot']?><?php echo $aik['admin_email']?></span> </span><br><span>Copyright ©  <?php echo $aik['sitename']?> 版权所有</span></font>

<script type="text/javascript" src="static/js/z_stat-5665993_5665993.js"></script><a href="javascript:history.back()">返回上页</a>
<script src="static/js/eord_cc-1599.js"></script>
</p>             
<div class="center"> 
<span id="sitetime">
<script language="javascript">
    function siteTime(){
        window.setTimeout("siteTime()", 1000);
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var days = hours * 24;
        var years = days * 365;
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth()+1;
        var todayDate = today.getDate();
        var todayHour = today.getHours();
        var todayMinute = today.getMinutes();
        var todaySecond = today.getSeconds();
        /* Date.UTC() -- 返回date对象距世界标准时间(UTC)1970年1月1日午夜之间的毫秒数(时间戳)
        year - 作为date对象的年份，为4位年份值
        month - 0-11之间的整数，做为date对象的月份
        day - 1-31之间的整数，做为date对象的天数
        hours - 0(午夜24点)-23之间的整数，做为date对象的小时数
        minutes - 0-59之间的整数，做为date对象的分钟数
        seconds - 0-59之间的整数，做为date对象的秒数
        microseconds - 0-999之间的整数，做为date对象的毫秒数 */
        var t1 = Date.UTC(2018,06,01,00,00,00); //北京时间2016-12-1 00:00:00
        var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond);
        var diff = t2-t1;
        var diffYears = Math.floor(diff/years);
        var diffDays = Math.floor((diff/days)-diffYears*365);
        var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours);
        var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes);
        var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds);
        document.getElementById("sitetime").innerHTML="本站已运行"+diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒";
    }
    siteTime();	
</script>
</span>
</div>				 
               </div>
			 </div>
	     </div>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $(".videopic.lazy").lazyload({effect: "fadeIn"});  
        $("[data-toggle='tooltip']").tooltip();
    });
	function ewm(){
		var url = "https://egame.qq.com/webapi/qrcode?content="+window.location.href;
		$("#ewmtp").attr('src',url);
		$("#gbewm").css("display","block");
		$("#gbewm").animate({left:'50%'});
	}
	function ewmgb(){
		$("#gbewm").animate({left:'100%'});
		$("#gbewm").css("display","none");
	}
</script>	
<div style="display:none;">

</div>
<!--百度自动推送-->


<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

	<style type="text/css"> 
BODY{cursor:url('static/image/1.jpg'), url(static/image/2.jpg), auto;}
A{cursor:url('static/image/3.jpg'), url(static/image/4.jpg), auto;} </style>
<script type="text/javascript">
/* 影视鼠标点击特效 */
var a_idx = 0;
jQuery(document).ready(function($) {
    $("body").click(function(e) {
var a = new Array("免费电影", "高清电影", "抢先看", "在线播放" ,"免VIP","最新影片");
var $i = $("<span/>").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
var x = e.pageX,
        y = e.pageY;
        $i.css({
"z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
"top": y - 20,
"left": x,
"position": "absolute",
"font-weight": "bold",
"color": "#ff6651"
        });
        $("body").append($i);
        $i.animate({
"top": y - 180,
"opacity": 0
        },
        1500,
function() {
            $i.remove();
        });
    });
});
</script>
  <script>
function fuckyou(){
window.close(); 
window.location="about:blank"; 
}

function click(e) {
if (document.all) {
  if (event.button==2||event.button==3) { 
alert("欢迎光临寒舍，有什么需要帮忙的话，请与站长联系！谢谢您的合作！！！");
oncontextmenu='return false';
}

}
if (document.layers) {
if (e.which == 3) {
oncontextmenu='return false';
}
}
}
if (document.layers) {
fuckyou();
document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;
//document.oncontextmenu = new Function("return false;")
document.onkeydown =document.onkeyup = document.onkeypress=function(){ 
if(window.event.keyCode == 123) { 
fuckyou();
window.event.returnValue=false;
return(false); 
} 
}
</script>
</body>
</html>
