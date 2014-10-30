<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<base target="_blank">
		<link href="http://hs.cnfol.com/f=ud/Css/Padmobile/Style.css" type="text/css" rel="stylesheet" />
	</head>
	<body class="MinH16">
		<div class="Wrap">
			<div class="Mt20 Mbx">
				<a href="<?php echo base_url().'index.php/picture/index';?>" target="_self">视图</a> >
				<a href="<?php echo base_url().'index.php/picture/Cars';;?>" target="_self">香车靓影</a> >
				正文
			</div>
			<div class="PicTitle Cf ">
				<span class="Fl L"><?php echo $one['name'];?>(<font id = "nums">1</font>/<?php echo $one['counts'];?>)</span>
				<span class="Fr">
				<span class="Sc Fl" id="Sc"></span> <!-- 这个是收藏以后的样式<span class="Sc"></span> -->
				<span class="Share Ml20 Fl" id="Share">
				<span class="ShareNr" id="ShareNr">
				<div class="bdsharebuttonbox Ml20"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a></div>
				</span>
				</span>
				<span class="Pl2 Ml20 Fl">158</span><!-- 这个是收藏以后的样式<span class="Pl2 Ml20">10</span> -->
				</span>
			</div>
			<div id="Slider" class="Swipe4 Mt10">
				<ul class="SwipeWrap">
					<li class="Wrap4">
					<?php  foreach ($pics as $key => $value) { ?>
						<a href="#" aid = "<?php echo $value['id'];?>"style = "display :<?php if($key>0){echo 'none';}else{echo 'block';} ?>" class = "pic_link">
							<img src="<?php echo $value['src'];?>" alt="error">
						</a>
					<?php } ?>
					</li>
				</ul>
				<span class="Pre" onclick="prevs()"></span>
				<span class="Next" onclick="nexts()"></span>
			</div>
			
			<!-- <div class="PicCont Mt14">
				<p>来源：</p>
			</div> -->
			<div class="Tr PicNrLy" style="text-align:start;">
			<?php foreach ($pics as $k => $v) { ?>
                <font style="display:<?php if($k>0){echo 'none';}else{echo 'block';}?> " id = "m_<?php echo $v['id'];?>"><?php echo $v['memo'];?></font>
             <?php }?>
			</div>
			<div class="Cf Mt20">
				<div class="Recom Fl">
					<div class="Top Cf">
						<span class="Fl">相关推荐</span>
						<span class="Pic Fl "></span>
						<span class="Line Fl"><span class="Y"></span></span>
					</div>
					<div class="ReList">
					<?php foreach ($recommend as $key => $value) {?>
						<a href="#" target="_blank" class="APic">
							<img src="<?php echo $value['show'];?>" alt="">
							<span><?php echo $value['title'];?></span>
						</a>
					<?php }?>	
					</div>
				</div>
				<div class="NewsList Fr">
					<span class="Top">热门文章</span>
					<ul class="Btm Cf Mt10">
					<?php foreach ($hot_article as $key => $value) {?>
					<?php if($key >3){?>
						<li>
							<span class="SpBg2 Fl"><?php echo $key;?></span>
							<a href="#" target="_blank" class="Fl Aw"><?php echo $value['title'];?></a>
						</li>
					<?php }else{?>	
					
						<li>
							<span class="SpBg1 Fl"><?php echo $key;?></span>
							<a href="#" target="_blank" class="Fl Aw"><?php echo $value['title'];?></a>
						</li>
					<?php }?>
					<?php }?>	
					</ul>
				</div>
			</div>
			<div class="Mt20 Tc Pt10 Pb20 FotBar">
				Copyright © 2003-2014 福建中金在线网络股份有限公司. All Right Reserved.
			</div>
		</div>
		<!-- 弹出框 -->
		<div id="Verify">
		</div>
		<script type="text/javascript" src="http://hs.cnfol.com/f=uc/Js/Mobile/zepto.min.js,uc/Js/Mobile/Swipe.min.js,ud/Js/Padmobile/Js.js"></script>
		<script type = "text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.min.js"></script>
		<script type = "text/javascript">
		ipad.slide2('#Slider');
		var slider =ipad.slide2('#Slider');
		ipad.Share('Share','ShareNr');
		//下面根据交互处理   处理完请封到JS里面
		Sc();
		function Sc()
		{
			var oBtn=document.getElementById('Sc');
			oBtn.onclick=function()
			{
				if(this.className=='Sc Fl')
				{
					this.className='Sc2 Fl';
					ipad.dialog('收藏成功'); //ipad.dialog('订阅成功')  这个函数是弹出框 参数是要提示滴内容
				}
				else{
					this.className='Sc Fl'
					ipad.dialog('取消收藏'); //ipad.dialog('订阅成功')  这个函数是弹出框 参数是要提示滴内容
				}
			}
		}
		function prevs()
		{
			var err = 0;
			var len = $('.pic_link').length;
			$('.pic_link').each(function(i){
				if($(this).css('display') == 'block'&&$(this).prev().is('a')){
					$('#nums').html(i);
					$(this).hide();
					$(this).prev().css('display','block');
					var id = $(this).attr('aid');
					$('#m_'+id).hide();
					$('#m_'+id).prev().css('display','block');
					return false;
				}
			});
		}
		function nexts()
		{
			var len = $('.pic_link').length;
			$('.pic_link').each(function(i){
				if($(this).css('display') == 'block'&&$(this).next().is('a')){
					$('#nums').html(i+2);
					$(this).hide();
					$(this).next().css('display','block');
					var id = $(this).attr('aid');
					$('#m_'+id).hide();
					$('#m_'+id).next().css('display','block');
					return false;
				}

			});
		}
		</script>
		<!-- 分享 -->
		<script>window._bd_share_config={"common":{"bdSnsKey":{"tsina":"中金在线pad版","tqq":"中金在线pad版","t163":"中金在线pad版","tsohu":"中金在线pad版"},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		
	</body>
</html>