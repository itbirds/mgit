<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<base >
		<link href="http://hs.cnfol.com/f=ud/Css/Padmobile/Style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="Wrap">
			
			<div class="Nav2 Mt20">
				<a href="<?php echo base_url().'index.php/picture/index';?>" target="_self">推荐</a>
				<a href="<?php echo base_url().'index.php/picture/channel/descant/12';?>" target="_self"  class="<?php if($channel == 'descant'){echo 'Active';}?>">金图解股</a>
    				<a href="<?php echo base_url().'index.php/picture/channel/futures/11';;?>" target="_self" class="<?php if($channel == 'futures'){echo 'Active';}?>">图解期货</a>
    				<a href="<?php echo base_url().'index.php/picture/Cars';;?>" target="_self">香车靓影</a>
			</div>
			<div class="Mt20 Mbx">
				<a href="<?php echo base_url().'index.php/picture/index';?>" target="_self">视图</a> > <?php echo $breads;?>
			</div>
			<div class="PicList Cf" id = "add_more">
				<?php foreach ($descant_list as $key => $value) {?>
				<a href="<?php echo base_url().'index.php/picture/articles/'.$value['articleId'].'/'.$value['partId'];?>" target="_blank">
					<img src="<?php echo $value['show'];?>">
					<em><?php echo $value['title'];?></em>
				</a>
				<?php }?>
			</div>
			
			<div class="GetMoreBox Tc Mt20">
				<a href="javascript:void(0)" onclick="more_add(<?php echo $channel_id;?>,'<?php echo $channel;?>')" class="Btn">点击加载更多</a>
			</div>
			
			<div class="Mt20 Tc Pt10 Pb20 FotBar">
				Copyright © 2003-2014 福建中金在线网络股份有限公司. All Right Reserved.
			</div>
			
			
		</div>
<script type = "text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.min.js"></script>
<script type = "text/javascript" src="<?php echo base_url();?>js/picture.js"></script>		
	</body>
</html>