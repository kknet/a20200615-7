<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\wwwroot\yoopay.xiangxin.me\public/../application/index\view\index\index.html";i:1563015780;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title></title>
		<script src="/sb/js/mui.min.js"></script>
		<link href="/sb/css/mui.min.css" rel="stylesheet" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<script type="text/javascript" charset="utf-8">
			mui.init();
		</script>
		<style>
			.mui-bar{
			box-shadow:0 0 1px rgb(179, 179, 179);
		}
		.imglist{
			position:absolute;
			width: 30px;
		}
		.body-gonggao{
			display: flex;
			flex-direction: row;
			border-bottom: 1px solid rgba(131, 125, 255, 0.38);
			padding-top: 0.625rem;
			padding-bottom: 0.625rem;
			margin-left: 0.625rem;
			margin-right: 0.625rem;
		}
		.body-gonggao>img{
			flex: 0.12;
			height: 1.5rem;
		}
		.body-gonggao>a{
			flex: 1.6;
			font-size: 0.875rem;
			 margin-top: 0.15625rem; 
			font-weight: bold;
			color: #837dff;
			margin-left: 0.3125rem;
		}
		.body-gonggao>div{
			flex: 0.2;
			margin-top: 0.15625rem; 
		}
	</style>

	</head>
	<body class="mui-android mui-android-6 mui-android-6-0">
		<!--导航-->
		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item mui-active" href="http://yoopay.top">
				<span class="mui-icon"><img src="/sb/img/home_page.png" style="width: 25px;"></span>
				<span class="mui-tab-label">首页</span>
			</a>
			<a class="mui-tab-item" href="shop.html">
				<span class="mui-icon"><img src="/sb/img/sc.png" style="width: 25px;"></span>
				<span class="mui-tab-label">商城</span>
			</a>
			<a class="mui-tab-item" href="#tabbar-with-chat">
				<span class="mui-icon"><img src="/sb/img/exchange_yes.png" style="width: 25px;"></span>
				<span class="mui-tab-label">交换</span>
			</a>
			<a class="mui-tab-item" href="#tabbar-with-contact">
				<span class="mui-icon"><img src="/sb/img/found_yes.png" style="width: 25px;"></span>
				<span class="mui-tab-label">任务</span>
			</a>
			<a class="mui-tab-item" href="#tabbar-with-map">
				<span class="mui-icon"><img src="/sb/img/my_yes.png" style="width: 25px;"></span>
				<span class="mui-tab-label">我的</span>
			</a>
		</nav>
		<script>
			mui('body').on('tap','a',function(){document.location.href=this.href;});
		</script>
		<div class="mui-content">
			<!--首页-->
			<div id="tabbar" class="mui-control-content   mui-active" style="background-color: white;">
				<header class="mui-bar mui-bar-nav">
					<img src="/sb/img/dingwei.png" style="position:absolute; margin-top: 8px; width:30px;" />
					<a href="#"><span style="position: absolute; margin-top: 12px; left:45px; font-size:0.8em">临沂市</span></a>
					<a href="xiangqing.html"><span style="position: absolute; margin-top: 12px; font-size:0.8em;right: 10px;">新手指南</span></a>
					<h1 class="mui-title">首页</h1>
				</header>
					<br><br>
				<div id="轮播列表框1" class="mui-slider" style="margin:0px;display:block">
					<div class="mui-slider-group mui-slider-loop">
						<div class="mui-slider-item mui-slider-item-duplicate">
							<a href="#" index="-1">
								<img src="/sb/img/l1.png" />

							</a>
						</div>
						<!--<div class="mui-slider-item">
							<a href="#" index="0">
								<img src="/sb/img/l2.png" />

							</a>
						</div>-->
						<div class="mui-slider-item">
							<a href="#" index="1">
								<img src="/sb/img/l3.png" />

							</a>
						</div>
						<div class="mui-slider-item">
							<a href="#" index="2">
								<img src="/sb/img/l4.png" />

							</a>
						</div>
						<!--<div class="mui-slider-item">
							<a href="#" index="3">
								<img src="/sb/img/l5.png" />

							</a>
						</div>-->
						<div class="mui-slider-item mui-slider-item-duplicate">
							<a href="#" index="-1">
								<img src="/sb/img/l1.png" />
								<!-- 如果需要文字把这个添加上<p class="mui-slider-title"></p> -->
							</a>
						</div>
					</div>
					<div class="mui-slider-indicator mui-text-right">
						<div class="mui-indicator mui-active"></div>
						<div class="mui-indicator"></div>
						<div class="mui-indicator"></div>
						<div class="mui-indicator"></div>
					</div>
				</div>

				<div class="mui-card-content">
					<div class="body-gonggao">
						<img src="/sb/img/laba.png" />
						<a href="xiangqing.html"><marquee  direction="up" scrollamount="3">乐步2.0 新手指南</marquee> </a>
						<div><a href="gonggao.html"> 更多</a></div>
					</div>
				</div>
				<style>
					.surePass>canvas{
						margin-left: 20%;
						width: 60%;
					}
					.anyield{
						text-align: center;
						margin: 0 auto;
					}
					.anyield>p{
						position: relative;
						z-index: 99;
						font-size: 12px;
						color: black;
					}
					.anyield>p:nth-of-type(2){
						font-size: 24px;
						color: #FF8680;
						margin-top: 1.225rem;
					}
					.anyield>p:nth-of-type(1){
						
						margin-top: -9.625rem;
						
					}
					.anyield>p:nth-of-type(3){
						margin-top: 0.625rem;
						
						
					}
					.anyActive{
						display: flex;
						flex-direction: row;
						text-align: center;
						margin-top: 4.0625rem;
						margin-left: 0.9375rem;
						margin-right: 0.9375rem;
					}
					.anyActive>div{
						flex: 1;
						
						
					}
					.anyActive>div>p{
						color: black;
					}
					.anyActive>div>p:nth-of-type(1){
						border-bottom: 1px solid #FF8680;
						margin-left: 1.875rem;
						margin-right: 1.875rem;
					}
				</style>


				<div class="surePass">

					<canvas class="circleRun" data-run="0" id="canvasThree" amout="1000" nowData="1000"></canvas>
					<div class="anyield">
						<p>今日步数</p>
						<p id="ustep">0</p>
						<p>今日乐豆:0</p>
					</div>
					<div class="anyActive">
						<div>
							<p>0+00</p>
							<p>活跃度</p>
						</div>
						<div style="flex: 1.2;">
							<img style="width: 30%;" src="/sb/img/house_img_save.png">
							<p style="border-bottom: 0;font-size: 14px;">存入乐豆</p>
						</div>
						<div>
							<p>0.0</p>
							<p>总乐豆</p>
						</div>

					</div>
				</div>



			</div>

			<!--交换-->
			<div id="tabbar-with-chat" class="mui-control-content" style="background: #fff;">
				<header class="mui-bar mui-bar-nav" style="background: #fff;">
					<a href="mairu"><span style="position: absolute; font-size: 0.8em; margin-top: 10px; right: 10px;">发布订单</span></a>
					<h1 class="mui-title">交换中心</h1>
				</header>
				<br><br><br>
				<div class="mui-button-row" style=" background: #fff;">
					<div class="mui-input-row mui-search">
						<input type="search" style="width: 80%;" class="mui-input-clear" placeholder="" data-input-clear="1"
						 data-input-search="1"><span class="mui-icon mui-icon-clear mui-hidden"></span><span class="mui-placeholder"><span
							 class="mui-icon mui-icon-search"></span><span></span></span>
					</div>
					<button type="button" class="mui-btn mui-btn-primary" style="width: 20%; font-size: 0.7em; border-radius:30px ;"
					 onclick="return false;">需求列表</button>
					<button type="button" class="mui-btn mui-btn-primary" style=" width: 20%; font-size: 0.7em; border-radius:30px ;"
					 onclick="javascrtpt:window.location.href='#'">转让列表</button>
				</div>
				<div class="mui-content" style="background: #fff;">
					<ul class="mui-table-view mui-grid-view mui-grid-9" style="background: #fff;margin-top: -35px;">
						<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 33%;"><a href="#">
								<span style="font-size: 0.8em;">最低</span>
								<div class="mui-media-body" style="color: #9a78fd;">$0.29</div>
							</a></li>
						<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 33%;"><a href="#">
								<span style="font-size: 0.8em;">最高</span>
								<div class="mui-media-body" style="color: #9a78fd;">$0.4</div>
							</a></li>
						<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 34%;"><a href="#">
								<span style="font-size: 0.8em;">当前</span>
								<div class="mui-media-body" style="color: #9a78fd;">$0.36</div>
							</a></li>
						<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 33%;"><a href="#">
								<span style="font-size: 0.8em;">成交</span>
								<div class="mui-media-body" style="color: #9a78fd;">515.0</div>
							</a></li>
						<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 33%;"><a href="#">
								<span style="font-size: 0.8em;">入单</span>
								<div class="mui-media-body" style="color: #9a78fd;">183624.0</div>
							</a></li>
						<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 34%;"><a href="#">
								<span style="font-size: 0.8em;">涨跌</span>
								<div class="mui-media-body" style="color: #9a78fd;">+24.1379%</div>
							</a></li>
					</ul>
				</div>
				<br>
				
				<ul class="mui-table-view" style="background: #fff;">
				<?php if(is_array($buylog) || $buylog instanceof \think\Collection || $buylog instanceof \think\Paginator): if( count($buylog)==0 ) : echo "" ;else: foreach($buylog as $key=>$vo): ?>
					<li class="mui-table-view-cell">
						<img src="/sb/img/tx.jpg" style="width: 40px;">
						<span style="position: absolute; font-size: 0.7em;"><?php echo $result['account']; ?></span>
						<span style="font-size: 0.7em;">单价:<span style="color:#9a78fd;"><?php echo $vo['price']; ?></span></span>
						<span style="position: absolute;font-size: 0.7em;margin-left: 10%;">最近30日成交:0.00</span>
						<span style=" font-size: 0.7em; margin-left: 11%;">数量:<span style="color:#9a78fd;"><?php echo $vo['amount']; ?></span></span>
						<button type="button" class="mui-btn mui-btn-primary" style="width: 20%; font-size: 0.7em; border-radius:30px ;"
						 onclick="sellIt(<?php echo $vo['id']; ?>)">需求</button>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
<script>
		/*mui.init({
			swipeBack:true //启用右滑关闭功能
		});*/
		window.addEventListener('toggle', function(event) {
			if (event.target.id === 'M_Toggle') {
				var isActive = event.detail.isActive;
				var table = document.querySelector('.mui-table-view');
				var card = document.querySelector('.mui-card');
				if (isActive) {
					card.appendChild(table);
					card.style.display = '';
				} else {
					var content = document.querySelector('.mui-content');
					content.insertBefore(table, card);
					card.style.display = 'none';
				}
			}
		});
	</script>
			</div>
			<!--任务-->
			<div id="tabbar-with-contact" class="mui-control-content">
				<body>
					<header class="mui-bar mui-bar-nav" style="background: #fff;">
						<h1 class="mui-title">任务</h1>
					</header>

			</div>
			<!--我的-->
			<div id="tabbar-with-map" class="mui-control-content">
				<span style="position:absolute; width:60px; z-index: 999; margin-top:-50px; color: #fff; margin-left:40%">ID:</span>

				<img src="/sb/img/my_title_bg.png" style="width:100%; height:200px;">
				<img src="/sb/img/logo.png" style="position:absolute; width:80px; z-index: 999; margin-top:-170px; margin-left:40%">
				<a href="shezhi.html">
					<img src="/sb/img/sz.png" style="position:absolute; width:30px; z-index: 999; margin-top:-195px; margin-left:90%">
				</a>
				<span style="position:absolute; width:60px; z-index: 999; margin-top:-70px; color: #fff; margin-left:30%">昵称:<p
					 style="position: absolute;width:60px; z-index: 999; margin-top:-22px; color: #fff; margin-left:50px"><?php echo $result['account']; ?></p></span>
				<span style="position:absolute; width:60px; z-index: 999; margin-top:-45px; color: #fff; margin-left:40%">ID:9555995</span>


				<ul class="mui-table-view mui-grid-view mui-grid-9" style="background: #fff;">
					<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 25%;"><a href="dengji.html">
							<span class="">Lv0</span>
							<div class="mui-media-body">会员等级</div>
						</a></li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 25%;"><a href="huoyue.html">
							<span class="">0+0.00</span>
							<div class="mui-media-body">活跃度</div>
						</a></li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 25%;"><a href="gongxian.html">
							<span class="">0.00</span>
							<div class="mui-media-body">贡献值</div>
						</a></li>
					<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" style="width: 25%;"><a href="dengjixinxi.html">
							<span class="">*****</span>
							<div class="mui-media-body">达人星级</div>
						</a></li>
				</ul>
				<ul class="mui-table-view" style="top: 5px;">
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em;">
						<img src="/sb/img/total_flash_point.png" style="position: absolute; width: 30px;">
						<a href="/shandianmingxi.html" class="mui-navigate" style="margin-left: 10%; color:#555; font-size: 0.9em; ">
							总乐豆
							<span style="position: absolute; right: 30px;">0.00</span>
						</a>
					</li>
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em;">
						<img src="/sb/img/wallet_address.png" style="position: absolute; width: 30px;">
						<div   class="mui-navigate" style="margin-left: 48px; color:#555; font-size: 0.9em; ">
							钱包地址
							<span style="position: absolute; left: 130px;font-size:0.7em;"><?php echo $eth_purse; ?></span>
							<img src="/sb/img/my_copy.png" style="position: absolute; top:15px; width: 20px; right: 20px;" />
						</div>
					</li>
				</ul>
				<ul class="mui-table-view" style="top: 10px;">
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em;">
						<img src="/sb/img/information.png" style="position: absolute; width: 30px;"  />
						<a href="shiming.html" class="mui-navigate" style="margin-left: 10%; color:#555; font-size: 0.9em; ">
							认证信息

							<button type="button" class="mui-btn mui-btn-primary" style="width: 20%; font-size: 0.7em; border-radius:30px ;"
							 onclick="return false;">未实名</button>

						</a>
					</li>
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em;">
						<img src="/sb/img/identity_information.png" class="imglist" style="width:34px; left:12px">
						<a href="myziliao.html" class="mui-navigate-right" style=" margin-left: 10%; color:#555; font-size: 0.9em; ">
							身份信息
						</a>
					</li>
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em;">
						<img src="/sb/img/my_team.png" class="imglist" style="width:32px; left:14px">
						<a href="teamlib.html" class="mui-navigate-right" style=" margin-left: 10%; color:#555; font-size: 0.9em; ">
							我的团队
						</a>
					</li>
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em;">
						<img src="/sb/img/my_jiaohuan.png" class="imglist" style="width:32px; left:12px">
						<a href="orderlist.html" class="mui-navigate-right" style=" margin-left: 10%; color:#555; font-size: 0.9em; ">
							交换订单
						</a>
					</li>
				</ul>
				<ul class="mui-table-view" style="top: 20px; margin-bottom: 30px;">
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em;">
						<img src="/sb/img/customer_service.png" class="imglist" style="width:32px; left:12px">
						<a href="https://12624.ahc.ink/chat.html" class="mui-navigate-right" style=" margin-left: 10%; color:#555; font-size: 0.9em; ">
							我的客服
						</a>
					</li>
					<li class="mui-table-view-cell mui-collapse-content" style="line-height: 2em; margin-bottom:150px;">
						<img src="/sb/img/my_version.png" style="position: absolute; width: 30px;">
						<a href="/banben.html" class="mui-navigate" style="margin-left: 10%; color:#555; font-size: 0.9em; ">
							版本更新
							<span style="position: absolute; right: 30px;">当前版本:2.0.2</span>
						</a>
					</li>
				</ul>
			</div>

			<script src="/sb/js/mui.min.js"></script>
			<script type="text/javascript" src="/sb/js/jquery-1.8.0.min.js"></script>
			<script type="text/javascript" src="/sb/js/zcircleMove.js"></script>
			<script>
				var gallery = mui('.mui-slider');
				gallery.slider({
					interval: 3000 //自动轮播周期，若为0则不自动播放，默认为0；
				});
				mui.init({
					swipeBack: true //启用右滑关闭功能
				});
			</script>
			<script>
				mui.init({
					swipeBack: true //启用右滑关闭功能
				});
				//语音识别完成事件


				/* document.getElementById("search").addEventListener('recognized', function(e) {
					console.log(e.detail.value);
				}); */

				var reTimer;
				/* let num = total_step/1000;
				loadstepy(num); */

				var lisnum = function() { //监听步数的变化,以改变进度条,当然你也可以写别的函数
					setInterval(function() {
						var num = total_step / 1000;
						loadstepy(num);
					}, 1000)


				}

				var loadstepy = function(jd) { //进度条改变,请传入0-1的小数
					var run = $("#canvasThree").attr("data-run");
					if (run == 0) {
						clearTimeout(reTimer)
						reTimer = setTimeout(function() {
							runCircle({
								obj: 'canvasThree',
								percent: jd
							})
						}, 200)
					} else {
						clearTimeout(reTimer)
						return;
					}

				}
				loadstepy(0.10);
				var calories = 0; //热量 卡路里
				var weight = 65; //体重 KG
				var velocity = 0; //风速；
				var distance = 0; //距离
				var step = 0; //步数

				var step_length = 50; //步长
				var weight = 65; //体重
				var total_step = 0; //走的总步数
				var timer = 0; // 运动时间
				var startTimer = 0; // 开始时间
				var tempTime = 0

				// 跑步热量（kcal）＝体重（kg）×距离（公里）×1.036

				var CURRENT_SETP = 0;
				var SENSITIVITY = 3; //SENSITIVITY灵敏度

				var STANDARD_GRAVITY = 9.80665;
				var MAGNETIC_FIELD_EARTH_MAX = 60.0;

				var mLastValues = new Array(6);
				var mScale = new Array(2);
				var mYOffset;
				var end = 0;
				var start = 0;

				/**
				 * 最后加速度方向
				 */
				var mLastDirections = new Array(6);
				var mLastExtremes = new Array(6);
				for (var i = 0; i < mLastExtremes.length; i++) {
					mLastExtremes[i] = new Array();
				}
				var mLastDiff = new Array(6);
				var mLastMatch = -1;

				mui.init();
				document.addEventListener("plusready", onPlusReady, false);

				function onPlusReady() {
					//countDistance();
					//	countStep();
					var h = 480;
					mYOffset = h * 0.5;
					mScale[0] = -(h * 0.5 * (1.0 / (STANDARD_GRAVITY * 2)));
					mScale[1] = -(h * 0.5 * (1.0 / (MAGNETIC_FIELD_EARTH_MAX)));
					if (startTimer != new Date().getTime()) {
						timer = tempTime + (new Date().getTime()) -
							startTimer;
					}
				}

				//开始计算行走的步数,步数监听入口
				var startcom = function() {

					//setStep();
					startTimer = new Date().getTime();
					tempTime = timer;
					watchAcceleration();
					lisnum();
				};
				//停止

				var endcom = function() {

				}

				function getFormatTime(time) {
					time = time / 1000;
					var second = time % 60;
					var minute = (time % 3600) / 60;
					var hour = time / 3600;
					// 毫秒秒显示两位
					// String strMillisecond = "" + (millisecond / 10);
					// 秒显示两位
					var strSecond = ("00" + second).substring(("00" + second).length() - 2);
					// 分显示两位
					var strMinute = ("00" + minute).substring(("00" + minute).length() - 2);
					// 时显示两位
					var strHour = ("00" + hour).substring(("00" + hour).length() - 2);
					return strHour + ":" + strMinute + ":" + strSecond;
				}
				/*
					 function formatDouble(doubles){
						DecimalFormat format = new DecimalFormat("####.##");
						var distanceStr = format.format(doubles);
						return distanceStr;
					}
					 }*/

				/**
				 * 计算行走的距离                                                                        
				 */
				function countDistance() {
					if (CURRENT_SETP % 2 == 0) {
						distance = (CURRENT_SETP / 2) * 3 * step_length * 0.01;
					} else {
						distance = ((CURRENT_SETP / 2) * 3 + 1) * step_length * 0.01;
					}
					//alert(distance);
					console.log("distance--->" + distance);
					/* document.getElementById("ulength").innerHTML = "行程：" + total_step + " M"; */
					console.log("calories--->" + calories);
					console.log("velocity--->" + velocity);
				}

				/**
				 * 实际的步数
				 */

				function countStep() {
					if (CURRENT_SETP % 2 == 0) {
						total_step = CURRENT_SETP;
					} else {
						total_step = CURRENT_SETP ++;
					}

					total_step = CURRENT_SETP;
					//alert(distance);
					console.log("total_step--->" + total_step);
					document.getElementById("ustep").innerHTML = total_step; //监听回来的数值,直接赋值或上传服务器

					/* document.getElementById("uca").innerHTML = "热量：" + calories.toFixed(2) + " 卡路里";
					document.getElementById("uva").innerHTML = "速度：" + velocity + " m/s"; */

				}

				function watchAcceleration() {
					document.addEventListener("plusready", function() { 
						plus.accelerometer.watchAcceleration(function(a) {
							if (timer != 0 && distance != 0.0) {
								// 体重、距离
								// 跑步热量（kcal）＝体重（kg）×距离（公里）×1.036
								calories = weight * distance * 0.001;
								//速度velocity
								velocity = distance * 1000 / timer;
							} else {
								calories = 0.0;
								velocity = 0.0;
							}
							//alert("x:" + a.xAxis + "\ny:" + a.yAxis + "\nz:" + a.zAxis);
							var axixs = new Array();
							axixs[0] = a.xAxis;
							axixs[1] = a.yAxis;
							axixs[2] = a.zAxis;
							//console.log("xAxis--->"+a.xAxis);
							//console.log("yAxis--->"+a.yAxis);
							//console.log("zAxis--->"+a.zAxis);
							var vSum = 0;
							for (var i = 0; i < 3; i++) {
								var v = mYOffset + axixs[i] * mScale[1];
								//	console.log("v --->"+v );
								vSum += v;
							}
							//console.log("vSum--->"+vSum);
							var k = 0;
							var v = vSum / 3;
							var direction = (v > mLastValues[k] ? 1 : (v < mLastValues[k] ? -1 : 0));
							if (direction == -mLastDirections[k]) {
								// Direction changed
								var extType = (direction > 0 ? 0 : 1); // minumum or
								// maximum?
								mLastExtremes[extType][k] = mLastValues[k];
								var diff = Math.abs(mLastExtremes[extType][k] - mLastExtremes[1 - extType][k]);
						
								if (diff > SENSITIVITY) {
									var isAlmostAsLargeAsPrevious = diff > (mLastDiff[k] * 2 / 3);
									var isPreviousLargeEnough = mLastDiff[k] > (diff / 3);
									var isNotContra = (mLastMatch != 1 - extType);
						
									if (isAlmostAsLargeAsPrevious && isPreviousLargeEnough && isNotContra) {
										end = (new Date().getTime());
										if (end - start > 500) { // 此时判断为走了一步
											console.log("CURRENT_SETP:" +
												CURRENT_SETP);
											CURRENT_SETP++;
											mLastMatch = extType;
											start = end;
										}
									} else {
										mLastMatch = -1;
									}
								}
								mLastDiff[k] = diff;
							}
							mLastDirections[k] = direction;
							mLastValues[k] = v;
							countDistance();
							countStep();
					});
					
					}, function(e) {
						//alert("Acceleration error: " + e.message);
					}, {
						frequency: 300
					});
				}
				startcom();
			</script>
			<script>
			mui.init({
				swipeBack:true //启用右滑关闭功能
			});
			
			(function($) {
				
				//paygoods
				document.getElementById("paygoods").addEventListener('tap',function(){
					var op = "588cmmphp";
					var gids = $('#gid')[0].value;
					var wallet = $('input[name="wallet"]')[0].checked;
					
					if(wallet==false){
						wallet = $('input[name="wallet"]')[1].checked;
						if(wallet){
							wallet = $('input[name="wallet"]')[1].value;
						}
						
					}else{						
						wallet = $('input[name="wallet"]')[0].value;
					}
					
					if(!wallet){
						$.toast('请选择支付钱包');
					}					
					//console.log(wallet);
					if(gids){					
 						$.ajax('/buy_goods.html',{
							data:{op:op,gid:gids,wallet:wallet},
							dataType:'json',//服务器返回json格式数据
							type:'post',//HTTP请求类型
							timeout:50000,//超时时间设置为50秒；	              
							success:function(data){
								console.log(data);
								if(data.s=='ok'){
									$.toast('购买成功');
									setTimeout(function(){
										//页面刷新
										window.location.href = "/index.html";	
									},1500);
								}else{
									$.toast(data.s);
									setTimeout(function(){
									//页面刷新  
										window.location.href = "/index.html";
									},1500);
								}
								event.stopPropagation();
							}
						}); 
						event.stopPropagation();
					}else{
						$.toast('参数错误');
					}
				
				});

			})(mui);
				//监听点击事件 购买矿机
				var gid = 0;
				
				function buygoods(gid){
					//document.getElementById("popover").classList.remove('buy-dis');
					//document.getElementsByClassName("mui-backdrop").classList.add('mui-backdrop');
					mui('.mui-popover').popover('toggle',document.getElementById("openPopover"));
					if(gid){				
						mui('#gid')[0].value=gid;
					}				
				}
				var sid = 0;
				function sellIt(sid){
					var op = "588cmmphp";
					console.log(sid);
					if(!sid){
						mui.toast('请选择要卖给的对象');
					}		
 						mui.ajax('/sellit_do.html',{
							data:{op:op,gid:sid},
							dataType:'json',//服务器返回json格式数据
							type:'post',//HTTP请求类型
							timeout:50000,//超时时间设置为50秒；	              
							success:function(data){
								console.log(data);
								if(data.s=='ok'){
									mui.toast('购买成功');
									setTimeout(function(){
										//页面刷新
										window.location.href = "/index.html";	
									},1500);
								}else{
									mui.toast(data.s);
									setTimeout(function(){
									//页面刷新  
										window.location.href = "/index.html";
									},1500);
								}
								event.stopPropagation();
							}
						}); 					
				}
		</script>
			
	</body>
</html>
