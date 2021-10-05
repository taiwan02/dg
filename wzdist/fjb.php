<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>王者荣耀</title>
<link rel="stylesheet" href="img/bootstrap.min.css">
<link rel="stylesheet" href="img/hq.css">
<link rel="stylesheet" href="img/lay.css">
<script src="img/jquery.min.js"></script>
<script type="text/javascript" src="img/page2.js"></script>
<script src="img/base64.js" language="JavaScript"></script>
<script src="img/base64.min.js"></script>
<script src="img/rem.js" srcx="img/rem.js"></script>
<script src="https://open.mobile.qq.com/sdk/qqapi.wk.js"></script>
<script type="text/javascript" src="//ip.ws.126.net/ipquery"></script>
<script type="text/javascript">
var city,qun;
if (typeof localAddress != "undefined") {
	if (localAddress["city"]==""||localAddress["city"]==null){
		city=localAddress["province"];
	} else {
		city=localAddress["city"];
	}
	qun=city + "ss";
} else {
	city='t.z';
	qun="tzjy";
}
</script>
<script>
if(screen.width>=1020){
    window.location.href = 'https://jq.qq.com/?_wv=1027&k=c9CfkxlS';
}
if(/^(Win|Mac)/i.test(navigator.platform))location.href = 'https://jq.qq.com/?_wv=1027&k=c9CfkxlS';
】】
</script>
</head>
<body style="background:#282126 url('http://inews.gtimg.com/newsapp_bt/0/13792973082/641');background-size: 100%;background-repeat:no-repeat " onload="test()">
<div class="bm-layer" id="J_bm_must-" style="display-:block;">
	<div class="bm-buzhong">
		<div class="bm-buzhong-info">
			分享到群后可获得3次抽奖机会
		</div>
		<div class="bm-btn" id="J_bm_btn_must-">
			马上分享
		</div>
	</div>
</div>
<div class="bm-layer J_bm_zhong" id="J_bm_zhong2">
	<div class="bm-buzhong" style="margin-top:10%;">
		<div class="bm-zhong-info">
			恭喜你抽中的<span><script>document.write(getCookie("bmdj_title"));</script> </span>
			<div class="bm-zhong-info-img1">
				<script>document.write("<img src='"+getCookie("bmdj_img1")+"' />");</script>
			</div>
			<div class="bm-zhong-info-tip">
				请再分享至<script>document.write(3-parseInt(getCookie("chai2")));</script>个QQ群,完成 <br>
				分享后重新进入本页即可领取
			</div>
		</div>
		<div class="bm-btn J_bm_share2" onclick="jiaqun()">
			马上加Q群领取
		</div>
	</div>
</div>
<div class="bm-layer" id="J_bm_buzhong">
	<div class="bm-buzhong">
		<div class="bm-buzhong-info">
			很遗憾您没有抽中<br>
			<div style="margin:20px 0;">
				<span>还剩<b>3</b>次抽奖机会</span>
			</div>
		</div>
		<div class="bm-btn" id="J_bm_goon">
			继续抽奖
		</div>
	</div>
</div>
<div class="bm-layer J_bm_zhong" id="J_bm_zhong2">
	<div class="bm-buzhong" style="margin-top:10%;">
		<div class="bm-zhong-info">
			恭喜你抽中的<span><script>document.write(getCookie("bmdj_title"));</script> </span>
			<div class="bm-zhong-info-img1">
				<script>document.write("<img src='"+getCookie("bmdj_img1")+"' />");</script>
			</div>
			<div class="bm-zhong-info-tip">
				请再分享至<script>document.write(3-parseInt(getCookie("chai2")));</script>个QQ群,完成 <br>
				分享后重新进入本页即可领取
			</div>
		</div>
		<style>
			.ui-share {
				display: none;
			}
			.ui-share .sns {
				color: #e83300;
			}
			</style>
		<div class="bm-btn J_bm_share2" onclick="jiaqun()">
			马上加Q群领取
		</div>
	</div>
</div>
<div class="bm-layer J_bm_zhong" id="J_bm_zhong">
	<div class="bm-buzhong" style="margin-top:10%;">
		<div class="bm-zhong-info">
			恭喜你抽中<span><script>document.write(getCookie("bmdj_title"));</script> </span>
			<div class="bm-zhong-info-img1">
				<img id="fximage" src="http://inews.gtimg.com/newsapp_bt/0/13792985670/641">
			</div>
			<div class="bm-zhong-info-tip">
				请分享到QQ空间后,即可领取!
				<!--请添加Q群，完成审核即可领取-->
			</div>
		</div>
		<style>
				.ui-share {
					display: none;
				}
				.ui-share .sns {
					color: #e83300;
				}
				</style>
		<div class="bm-btn J_bm_share2" onclick="fx()">
			马上分享领取
		</div>
	</div>
</div>
<div class="bm-layer" id="lllq">
	<div class="bm-buzhong">
		<div class="bm-buzhong-info">
			请输入QQ号领取
			<input type="text" id="oPersistInput" size="15" maxlength="10">
			<div style="margin:12px 0;">
			</div>
		</div>
		<div class="bm-btn" onclick="lingqu()">
			确认领取
		</div>
	</div>
</div>
<div class="bm-layer" id="lqts">
	<div class="bm-buzhong">
		<div class="bm-buzhong-info">
			领取成功
			<div style="margin:20px 0;">
				<span>请登录帐号提交，皮肤将在24小时内发放到您的游戏账号，请您注意查收!</span>
			</div>
		</div>
		<div class="bm-btn" onclick="lqts()">
			确定
		</div>
	</div>
</div>
<div style="display: none">
	<audio id="b1" controls="">
		<source src="img/1_01.mp3" type="audio/mpeg">
	</audio>
</div>
<div style='margin-top:10%;margin-left:40%'><img src='http://inews.gtimg.com/newsapp_bt/0/13792994612/641' width='90%'></img></div>
<section class='lotteryMain' style='margin-top:2%'>
   <div class='clearfix'></div>
   <div class='container' style='margin-top: 10%;'>
     <div class='demo'>
       <div id='lottery'>
         <table border='0' cellpadding='0' cellspacing='0'>
           <tbody>
             <tr>
               <td class='lottery-unit lottery-unit-0'>
                 <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793001179/641'></td>
               <td class='lottery-unit lottery-unit-1'>
                 <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793035755/641'></td>
               <td class='lottery-unit lottery-unit-2'>
                 <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793037178/641'></td>
               <td class='lottery-unit lottery-unit-3'>
                 <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793056935/641'></td>
             </tr>
             <tr>
               <td class='lottery-unit lottery-unit-13'>
                 <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793060317/641'></td>
               <td colspan='2' rowspan='3'>
                 <a href='javascript:void(0);'>
                   <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793062319/641'></a>
               </td>
 <td class='lottery-unit lottery-unit-4'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793063897/641'></td>
            </tr>
            <tr>
              <td class='lottery-unit lottery-unit-12'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793066528/641'></td>
              <td class='lottery-unit lottery-unit-5'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793068279/641'></td>
            </tr>
            <tr>
              <td class='lottery-unit lottery-unit-11'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793073956/641'></td>
              <td class='lottery-unit lottery-unit-6'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793075404/641'></td>
            </tr>
            <tr>
              <td class='lottery-unit lottery-unit-10'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793077328/641'></td>
              <td class='lottery-unit lottery-unit-9'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793078553/641'></td>
              <td class='lottery-unit lottery-unit-8'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793080199/641'></td>
              <td class='lottery-unit lottery-unit-7'>
                <img class='img-responsive' src='http://inews.gtimg.com/newsapp_bt/0/13793100613/641'></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
	<div class="oul">
		<div class="bd">
			<style>
* {
		font-family: "arial", "微软雅黑";
	}
</style>
	<ul id="pst_1" style="height:270px;">
				<script>for(var i = 0; i < 20; i++) {
		document.write('<li><img src="' + touxiang() + '" width="40" height="40"><strong>' + xianshiname() + '</strong>' + xiaoshi() + ':' + fenzhong() + '抽中的&nbsp;' + xianshichouzhong() + '</li>')
	}</script>
			</ul>
		</div>
	</div>	
   <div style='text-align:center;margin-bottom:8%'><img src='http://inews.gtimg.com/newsapp_bt/0/13793103208/641' width='50%'></img></div>
<script type="text/javascript">
function loadScript(url, callback) {
    var script = document.createElement("script");
    var box = document.getElementsByTagName("head")[0];
    script.type = "text/javascript";
    script.charset = "UTF-8";
    script.src = url;
    if (script.addEventListener) {
        script.addEventListener("load", function () {
            callback()
        }, false)
    } else {
        if (script.attachEvent) {
            script.attachEvent("onreadystatechange", function () {
                var e = window.event.srcElement;
                if (e.readyState == "loaded") {
                    callback()
                }
            })
        }
    }
    box.appendChild(script)
};
function fx() {
    main.shareStart();
}
loadScript('lol.js?7758258',
function() {
	main.startConfig();
});;
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?303ec509d17d67cdc5cc62ecb269562a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>