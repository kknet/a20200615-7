﻿<? include('system/inc.php'); 
 
   include('checkpc.php');
 if ($_REQUEST['page']=='')
 {$page='1';}
 else
 {$page=$_REQUEST['page'];}
 $result = mysql_query('select * from '.flag.'hezidtl where id = '.$_GET['id'].'');
$row = mysql_fetch_array($result);
{
  $hid = $row['hid'];
  $url = $row['url'];
   }  
   
   
  
 ?>
 		 
<html><head><title><?=get_hezi('name',$hid)?></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<link href="/static/index/css/style.css?v=0.1" rel="stylesheet">
<link href="/static/index/weui.min.css" rel="stylesheet">
<link href="/static/admin/css/style.min.css?v=0.1" rel="stylesheet">
<style>
	
	.laypage_main a,.laypage_main input,.laypage_main span{height:26px;line-height:26px}.laypage_main button,.laypage_main input,.laypageskin_default a{border:1px solid #ccc;background-color:#fff}.laypage_main{font-size:0;clear:both;color:#666}.laypage_main *{display:inline-block;vertical-align:top;font-size:12px}.laypage_main a{text-decoration:none;color:#666}.laypage_main a,.laypage_main span{margin:0 3px 6px;padding:0 10px}.laypage_main input{width:40px;margin:0 5px;padding:0 5px}.laypage_main button{height:28px;line-height:28px;margin-left:5px;padding:0 10px;color:#666}.laypageskin_default span{height:28px;line-height:28px;color:#999}.laypageskin_default .laypage_curr{font-weight:700;color:#666}.laypageskin_molv a,.laypageskin_molv span{padding:0 12px;border-radius:2px}.laypageskin_molv a{background-color:#f1eff0}.laypageskin_molv .laypage_curr{background-color:#00AA91;color:#fff}.laypageskin_molv input{height:24px;line-height:24px}.laypageskin_molv button{height:26px;line-height:26px}.laypageskin_yahei{color:#333}.laypageskin_yahei a,.laypageskin_yahei span{padding:0 13px;border-radius:2px;color:#333}.laypageskin_yahei .laypage_curr{background-color:#333;color:#fff}.laypageskin_flow{text-align:center}.laypageskin_flow .page_nomore{color:#999}
	
	
	
		#navsecond{position: absolute;bottom:0;display: none;}
 
	
	</style>
    
 </head>
<body style="max-width:460px; margin:0 auto;">
 <div style="height: 42px; width: 100%; background-color: #000;display: block;opacity: 0.8; line-height: 42px;font-size: 22px;text-align: center;color: #FFF;margin-bottom: 8px;"><?=get_hezi('name',$hid)?></div>
<div style="padding: 0px 8px 8px; ">


 
  
<script type="text/javascript" src="ckplayer/ckplayer.js"></script>
	 <div class="rich_media_content"  id="video" style="width: 100%; height: 250px;border: solid 1px #323136;padding-left:1px;"></div>

 

    
 <script type="text/javascript">
var videoObject = {
container: '#video',
variable: 'player', 
//html5m3u8:true,
loop: true,
autoplay: true, 
poster: '', 
video:'<?=$url?>'
};
var player = new ckplayer(videoObject);
</script>
<script type="text/javascript">
function run () {
var index = Math.floor(Math.random()*10);
pmd(index);
};
var times = document.getElementsByClassName('fuckyou').length;
setInterval('run()',times*200);
function pmd (id) {
var colors = new Array('#FF5151','#ffaad5','#ffa6ff','#d3a4ff','#2828FF','#00FFFF','#1AFD9C','#FF8000','#81C0C0','#B766AD');
var color = colors[id];
var tmp = document.getElementsByClassName('fuckyou');
for (var i = 0; i < tmp.length; i++) {
var id = tmp[i];
var moren = id.style.color;
setTimeout(function(id){
id.style.color = color;
},i*200,id);
setTimeout(function(id,moren){
id.style.color = moren;
},i*200+180,id,moren);
};
}
</script>

 

<div id="">
<div style="padding-top:10px;font-size:16px;">
<section id="container">
<div class="h_playlist_box" id="article_list"> 

 	 
	<?php
						
 
 
 $sql = 'select * from '.flag.'hezishipin where hid = '.$hid.'   order by id desc , id desc';
 								$pager = page_handle('page',20,mysql_num_rows(mysql_query($sql)));
								$result = mysql_query($sql.' limit '.$pager[0].','.$pager[1].'');
							while($row= mysql_fetch_array($result)){
						
 						 
 							?>
 	
	 <a href="/shipin.php?id=<?=$row['vid']?>"><dl   ><dt style="height: 9rem;width: 100%;"><em></em><img src="<?=get_usershipin('image',$row['vid'])?>"    height="240px"  style=" display: inline;"  ></dt>    <dd>  <span><?=cut_str(get_usershipin('name',$row['vid']),27,'...')?></span>   </dd></dl> </a>    
	 
	 <? }?>

 
   </div>
 </section>
  
  	 <div  style="height:8PX"></div>
<hr  style="width:99%">
	 <div id="AjaxPage" style=" text-align: right;margin-top:30px;">
		<div name="laypage1.3" class="laypage_main laypageskin_molv" id="laypage_7">
		
		 <?php echo xiaoyewl_pape($pager[2],$pager[3],$pager[4],2);?>
	 
			
			
			<?PHP

//返回翻页条
//参数说明：1.总页数。2.当前页。3.分页参数。4.分页半径。
function xiaoyewl_pape($t0, $t1, $t2, $t3) {
	$page_sum = $t0;
	$page_current = $t1;
	$page_parameter = $t2;
	$page_len = $t3;
	$page_start = '';
	$page_end = '';
	$page_start = $page_current - $page_len;
	if ($page_start <= 0) {
		$page_start = 1;
		$page_end = $page_start + $page_end;
	}
	$page_end = $page_current + $page_len;
	if ($page_end > $page_sum) {
		$page_end = $page_sum;
	}
	$page_link = $_SERVER['REQUEST_URI'];
	$tmp_arr = parse_url($page_link);
	if (isset($tmp_arr['query'])){
		$url = $tmp_arr['path'];
		$query = $tmp_arr['query'];
		parse_str($query, $arr);
		unset($arr[$page_parameter]);
		if (count($arr) != 0){
			$page_link = $url.'?'.http_build_query($arr).'&';
		}else{
			$page_link = $url.'?';
		}
	}else{
		$page_link = $page_link.'?';
	}
	$page_back = '';
	$page_home = '';
	$page_list = '';
	$page_last = '';
	$page_next = '';
	$tmp = '';
	if ($page_current > $page_len + 1) {
	//	$page_home = '<a href="'.$page_link.$page_parameter.'=1" title="首页">1...</a>';
	}
	if ($page_current == 1) {
		$page_back = '<a   class="laypage_prev" title="上一页">上一页</a>';
	} else {
		$page_back = '<a href="'.$page_link.$page_parameter.'='.($page_current - 1).'"  class="laypage_prev" title="上一页">上一页</a>';
	}
	for ($i = $page_start; $i <= $page_end; $i++) {
		if ($i == $page_current) {
//			$page_list = $page_list.'<span class="current">'.$i.'</span>';
		} else {
	//		$page_list = $page_list.'<a href="'.$page_link.$page_parameter.'='.$i.'" title="第'.$i.'页">'.$i.'</a>';
		}
	}
	if ($page_current < $page_sum - $page_len) {
		// $page_last = '<a href="'.$page_link.$page_parameter.'='.$page_sum.'" title="尾页">...'.$page_sum.'</a>';
	}
	if ($page_current == $page_sum) {
		$page_next = '<a   class="laypage_next" title="下一页">下一页</a>';
	} else {
		$page_next = '<a href="'.$page_link.$page_parameter.'='.($page_current + 1).'"  class="laypage_next" title="下一页">下一页</a>';
	}
	$tmp = $tmp.$page_back.$page_home.$page_list.$page_last.$page_next.'';
	return $tmp;
}

 
?>


			<form action="">
			<input type="hidden" name="id" value="<?=$_REQUEST['id']?>" />
			<span class="laypage_total"><label>到第</label><input type="number" name="page" min="1" onKeyUp="this.value=this.value.replace(/\D/, '');" class="laypage_skip"><label>页</label><button   type="submit" class="laypage_btn">确定</button>
			</form>
			</span>
		</div>
	</div>
	<div id="allpage" style=" text-align: right; background: #fff;margin-right: 15px;">第<span id="curpage"><?=$page?></span>页</div>
	
	
	
	</div>
	
	

	 <style>
	
	#container{overflow:inherit;}
	
	.h_playlist_box{margin: 0;width: 103%;}
	
	.h_playlist_box dl{padding: 6px 6px;width: 44%;float:left;height:11rem;margin-right: 1%;}
	
	.h_playlist_box dl dd{width: 100%;margin: 0;padding:0 1%;float: left;}
	
	.h_playlist_box dl dt{margin:0;position: relative;}
	
	.h_playlist_box dl dd span{font-size:13px;
	
			overflow: hidden;
	
			text-overflow: ellipsis;
	
			display: -webkit-box;
	
			-webkit-line-clamp: 3;
	
			-webkit-box-orient: vertical;
	
			margin-top:5px;
	
			}
	</style>
	</div>
	</div>
	</div>
	</body></html>
