<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<base target="_blank">
		<link href="http://hs.cnfol.com/f=ud/Css/Padmobile/Style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="Wrap">
			
			<div class="Nav2 Mt20">
				<a href="<?php echo base_url().'index.php/picture/index';?>" target="_self">推荐</a>
				<a href="<?php echo base_url().'index.php/picture/channel/descant/12';?>" target="_self" >金图解股</a>
    				<a href="<?php echo base_url().'index.php/picture/channel/descant/11';;?>" target="_self">图解期货</a>
    				<a href="<?php echo base_url().'index.php/picture/Cars';;?>" target="_self" class="Active">香车靓影</a>
			</div>
			<div class="ColumnTop Mt60">
				<span class="Title2 Fl">香车靓影</span>
				<a href="<?php echo base_url().'index.php/picture/channel/pic_more/'.$pic_id;?>" target="_blank" class="Fr Mr10 ">MORE</a>
				<span class="Zj Fr"></span>
				<span class="Sub Fr Ml20 Bs">+订阅此栏目</span>
				<!-- <span class="NoSub Fr Ml20 Bs">√已订阅</span> -->
			</div>
			<div id="Slider" class="Swipe Mt20">
				<ul class="SwipeWrap">
				<?php foreach ($big_pic as $key => $value) {?>
					<li class="Wrap2">
						<a href="<?php echo $value['cache_url'];?>">
							<img src="<?php echo $value['show'];?>" alt="">
							<em class="ItemImgDesc"><?php echo $value['title'];?></em>
						</a>
					</li>
				<?php }?>
				</ul>
				<ul class="SlideMark">
					<li class="Active"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<span class="Pre" onclick="slider.prev()"></span>
				<span class="Next" onclick="slider.next()"></span>
			</div>
			
			<div class="ColumnTop Mt60">
				<span class="Title Fl">酷车一览</span>
				<a href="<?php echo base_url().'index.php/picture/channel/car_more/'.$car_id;?>" target="_blank" class="Fr Mr10">MORE</a>
				<span class="Line Fr Mr10">
				<em class="Y"></em>
				</span>
				<span class="Sub Fr Ml20 Bs">+订阅此栏目</span>
				<!-- <span class="NoSub Fr Ml20 Bs">√已订阅</span> -->
			</div>
			<div class="PicList Cf">
			<?php foreach ($cool_car as $key => $value) {?>
				<a href="<?php echo base_url().'index.php/picture/articles/'.$value['articleId'].'/'.$value['partId'];?>" target="_blank">
					<img src="<?php echo $value['show'];?>">
					<em><?php echo $value['title'];?></em>
				</a>
			<?php }?>
			</div>
			<div class="ColumnTop Mt60">
				<span class="Title Fl">车界趣闻</span>
				<a href="<?php echo base_url().'index.php/picture/channel/fun_more/'.$fun_id;?>" target="_blank" class="Fr Mr10">MORE</a>
				<span class="Line Fr Mr10">
				<em class="Y"></em>
				</span>
				<span class="Sub Fr Ml20 Bs">+订阅此栏目</span>
				<!-- <span class="NoSub Fr Ml20 Bs">√已订阅</span> -->
			</div>
			<div class="PicList Cf">
			<?php foreach ($funs as $key => $value) {?>
				<a href="<?php echo base_url().'index.php/picture/articles/'.$value['articleId'].'/'.$value['partId'];?>" target="_blank">
					<img src="<?php echo $value['show'];?>">
					<em><?php echo $value['title'];?></em>
				</a>
			<?php }?>
			</div>
			
			<div class="Mt20 Tc Pt10 Pb20 FotBar">
				Copyright © 2003-2014 福建中金在线网络股份有限公司. All Right Reserved.
			</div>
		</div>
		<!-- 弹出框 -->
		<div id="Verify">
		</div>
		<script type="text/javascript" src="http://hs.cnfol.com/f=uc/Js/Mobile/zepto.min.js,uc/Js/Mobile/Swipe.min.js,ud/Js/Padmobile/Js.js"></script>
		<script>
		ipad.slide('#Slider');
		var slider =ipad.slide('#Slider');
		//下面根据交互处理   处理完请封到JS里面
		Dy ()
		function Dy () 	{
			var aBtn=document.querySelectorAll('.ColumnTop .Bs');
			for (var i = 0; i < aBtn.length; i++) {
				aBtn[i].onclick=function(){
				
					if(this.className=='Sub Fr Ml20 Bs')
					{
						
						this.className='NoSub Fr Ml20 Bs';
						this.innerHTML='√已订阅';
						ipad.dialog('订阅成功'); //ipad.dialog('订阅成功')  这个函数是弹出框 参数是要提示滴内容
					}
					else
					{
						
						this.className='Sub Fr Ml20 Bs';
						this.innerHTML='+订阅此栏目';
						ipad.dialog('取消订阅'); //ipad.dialog('订阅成功')  这个函数是弹出框 参数是要提示滴内容
					}
					
				}
			};
		}
		</script>
		
	</body>
</html>