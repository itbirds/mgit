<?php
echo $title;
//echo '<hr/>';
//echo '<pre>';var_dump($finance_eye);echo '</pre>';
?>
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

	 <div id="Slider" class="Swipe Mt20">
        <ul class="SwipeWrap">
            <li class="Wrap2">
            	<a href="http://www.baidu.com/">
	                <img src="Img/01.jpg" alt="#">
	                <em class="ItemImgDesc">金融输血实体路径生变</em>
                </a>
            </li>
            <li class="Wrap2">
              <a href="http://www.baidu.com/">
	                <img src="Img/02.jpg" alt="#">
	                <em class="ItemImgDesc">金融输血实体路径生变</em>
                </a
</li>
            <li class="Wrap2">
               <a href="http://www.baidu.com/">
	                <img src="Img/03.jpg" alt="#">
	                <em class="ItemImgDesc">金融输血实体路径生变</em>
                </a
</li>
            <li class="Wrap2">
               <a href="http://www.baidu.com/">
	                <img src="Img/01.jpg" alt="#">
	                <em class="ItemImgDesc">金融输血实体路径生变</em>
                </a
</li>
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

   	<div id="Slider2" class="Swipe2 Mt60">
        <ul class="SwipeWrap">
        	<li>
        		<a href="#" class="PicBox">
        			<img src="Img/01.jpg" alt="">
        			<span>存在：寻子联盟寻子联盟（下）寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/02.jpg" alt="">
        			<span>存在：（下）寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/03.jpg" alt="">
        			<span>存在：寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/01.jpg" alt="">
        			<span>存在：寻寻子联寻子联盟寻子联盟</span>
        		</a>
        	</li>
        	<li>
        		<a href="#" class="PicBox">
        			<img src="Img/01.jpg" alt="">
        			<span>存在：寻子联盟寻子联盟（下）寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/02.jpg" alt="">
        			<span>存在：（下）寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/03.jpg" alt="">
        			<span>存在：寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/01.jpg" alt="">
        			<span>存在：寻寻子联寻子联盟寻子联盟</span>
        		</a>
        	</li>
        	<li>
        		<a href="#" class="PicBox">
        			<img src="Img/01.jpg" alt="">
        			<span>存在：寻子联盟寻子联盟（下）寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/02.jpg" alt="">
        			<span>存在：（下）寻子联盟寻子联</span>
        		</a>
        		<a href="#" class="PicBox">
        			<img src="Img/03.jpg" alt="">
        			<span>存在：寻子联盟寻子联</span>
        		</a>
        	</li>

        </ul>
        <span class="Pre" onclick="slider2.prev()"></span>
		<span class="Next" onclick="slider2.next()"></span>
    </div>


	<div class="ColumnTop Mt60">
		<span class="Title Fl">今日财经汇</span>
		<a href="#" class="Fr Mr10">MORE</a>
		<span class="Line Fr Mr10">
			<em class="Y"></em>
		</span>
		<span class="Sub Fr Ml20">+订阅此栏目</span>
		<!-- <span class="NoSub Fr Ml20">√已订阅</span> -->
	</div>

	<div class="ColumnMain Mt20 Cf">
        <?php foreach($finance  as $key=>$value){?>
         <?php if($key>0){?>
                <a href="#" class="RtPic">
                    <embed src="<?php echo base_url()."player/ckplayer.swf";?>" flashvars="f=http://flv.cnfol.com/jrcjh/2014/07/14071502.flv&i=<?php echo base_url()."player/test.jpg&p=0";?>" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" allowFullscreen="true" type="application/x-shockwave-flash"></embed>
                    <span><?php echo $value['Title'];?></span>
                </a>
         <?php }else{?>
                <a href="#" class="LfPic">
                    <img src="Img/01.jpg" />
                    <em><?php echo $value['Title'];?></em>
                </a>
         <?php }?>
        <?php }?>
	</div>

	<div class="ColumnTop Mt60">
		<span class="Title Fl">财经早视</span>
		<a href="#" class="Fr Mr10">MORE</a>
		<span class="Line Fr Mr10">
			<em class="Y"></em>
		</span>
		<span class="NoSub Fr Ml20">√已订阅</span>
	</div>

	<div class="ColumnMain Mt20 Cf">
        <?php foreach($finance_first  as $key=>$value){?>
            <?php if($key>0){?>
                <a href="#" class="RtPic">
                    <img src="Img/02.jpg"/>
                    <span><?php echo $value['Title'];?></span>
                </a>
            <?php }else{?>
                <a href="#" class="LfPic">
                    <img src="Img/01.jpg" />
                    <em><?php echo $value['Title'];?></em>
                </a>
            <?php }?>
        <?php }?>
	</div>



	<div class="ColumnTop Mt60">
		<span class="Title Fl">见微知著</span>
		<a href="#" class="Fr Mr10">MORE</a>
		<span class="Line Fr Mr10">
			<em class="Y"></em>
		</span>
		<span class="Sub Fr Ml20">+订阅此栏目</span>
		<!-- <span class="NoSub Fr Ml20">√已订阅</span> -->
	</div>

	<div class="ColumnMain Mt20 Cf">
        <?php foreach($around_corners  as $key=>$value){?>
            <?php if($key>0){?>
                <a href="#" class="RtPic">
                    <img src="Img/02.jpg"/>
                    <span><?php echo $value['Title'];?></span>
                </a>
            <?php }else{?>
                <a href="#" class="LfPic">
                    <img src="Img/01.jpg" />
                    <em><?php echo $value['Title'];?></em>
                </a>
            <?php }?>
        <?php }?>
	</div>



	<div class="ColumnTop Mt60">
		<span class="Title Fl">财经眼</span>
		<a href="#" class="Fr Mr10">MORE</a>
		<span class="Line Fr Mr10">
			<em class="Y"></em>
		</span>
		<span class="Sub Fr Ml20">+订阅此栏目</span>
		<!-- <span class="NoSub Fr Ml20">√已订阅</span> -->
	</div>

	<div class="ColumnMain Mt20 Cf">
        <?php foreach($finance_eye  as $key=>$value){?>
            <?php if($key>0){?>
                <a href="#" class="RtPic">
                    <img src="Img/02.jpg"/>
                    <span><?php echo $value['Title'];?></span>
                </a>
            <?php }else{?>
                <a href="#" class="LfPic">
                    <img src="Img/01.jpg" />
                    <em><?php echo $value['Title'];?></em>
                </a>
            <?php }?>
        <?php }?>
	</div>



	<div class="ColumnTop Mt60">
		<span class="Title Fl">趣味财经</span>
		<a href="#" class="Fr Mr10">MORE</a>
		<span class="Line Fr Mr10">
			<em class="Y"></em>
		</span>
		<span class="Sub Fr Ml20">+订阅此栏目</span>
		<!-- <span class="NoSub Fr Ml20">√已订阅</span> -->
	</div>

	<div class="ColumnMain Mt20 Cf">
        <?php foreach($finance_fun  as $key=>$value){?>
            <?php if($key>0){?>
                <a href="#" class="RtPic">
                    <img src="Img/02.jpg"/>
                    <span><?php echo $value['Title'];?></span>
                </a>
            <?php }else{?>
                <a href="#" class="LfPic">
                    <img src="Img/01.jpg" />
                    <em><?php echo $value['Title'];?></em>
                </a>
            <?php }?>
        <?php }?>
	</div>
	<div class="Mt20 Tc Pt10 Pb20 FotBar">Copyright © 2003-2014 福建中金在线网络股份有限公司. All Right Reserved.</div>

</div>

<script type="text/javascript" src="http://hs.cnfol.com/f=uc/Js/Mobile/zepto.min.js,uc/Js/Mobile/Swipe.min.js,ud/Js/Padmobile/Js.js"></script>
<script>
ipad.slide('#Slider');
var slider =ipad.slide('#Slider');

ipad.slide2('#Slider2');
var slider2 =ipad.slide2('#Slider2');
</script>

</body>
</html>

