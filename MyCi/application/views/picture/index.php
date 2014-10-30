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
    <a href="<?php echo base_url().'index.php/picture/index';?>" target="_self" class="Active">推荐</a>
    <a href="<?php echo base_url().'index.php/picture/channel/descant/12';?>" target="_self" >金图解股</a>
    <a href="<?php echo base_url().'index.php/picture/channel/futures/11';;?>" target="_self">图解期货</a>
    <a href="<?php echo base_url().'index.php/picture/Cars';;?>" target="_self">香车靓影</a>
</div>
<div class="Cf">
    <div id="Slider3" class="Swipe3 Mt20 Fl">
        <ul class="SwipeWrap">
            <li class="Wrap3">
                <a href="http://www.baidu.com/">
                    <img src="Img/01.jpg" alt="#">
                    <em class="ItemImgDesc3">金融输血实体路径生变</em>
                </a>
            </li>
            <li class="Wrap3">
                <a href="http://www.baidu.com/">
                    <img src="Img/02.jpg" alt="#">
                    <em class="ItemImgDesc3">金融输血实体路径生变</em>
                </a
            </li>
            <li class="Wrap3">
                <a href="http://www.baidu.com/">
                    <img src="Img/03.jpg" alt="#">
                    <em class="ItemImgDesc3">金融输血实体路径生变</em>
                </a
            </li>
            <li class="Wrap3">
                <a href="http://www.baidu.com/">
                    <img src="Img/01.jpg" alt="#">
                    <em class="ItemImgDesc3">金融输血实体路径生变</em>
                </a
            </li>
        </ul>
        <ul class="SlideMark">
            <li class="Active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>aaa
    </div>
    <div class="EecPic Fr Mt20">
        <div class="Top Cf">
            <span class="Fl F32">图说财经</span>
            <a href="http://news.cnfol.com/cnfol_inc/news/tscj.shtml" class="Fr More" target="_blank">MORE</a>
        </div>
        <?php foreach($pictures as  $key=>$value){?>
        <a href="<?php echo $value['url'];?>" class="ApicBox" target="_blank">
            <img src=<?php echo $value['src'];?> onerror = "" alt="<?php echo $value['alt'];?>">
            <em><?php echo $value['title'];?></em>
        </a>
        <?php }?>
    </div>
</div>
<div class="ColumnTop Mt60">
    <span class="Title Fl">热点事件</span>
    <a href="<?php echo base_url().'index.php/picture/channel/hot_more/'.$hot_id;?>" target="_blank" class="Fr Mr10">MORE</a>
				<span class="Line Fr Mr10">
				<em class="Y"></em>
				</span>
    <span class="Sub Fr Ml20 Bs">+订阅此栏目</span>
    <!-- <span class="NoSub Fr Ml20 Bs">√已订阅</span> -->
</div>
<div class="PicList Cf">
<?php foreach ($hot as $key => $value) { ?>
    <a href="<?php echo base_url().'index.php/picture/articles/'.$value['articleId'].'/'.$value['partId']; ?>" target="_blank">
        <img src="<?php echo $value['show'];?>">
        <em><?php echo $value['title'];?></em>
    </a>
<?php }?>
</div>
<div class="ColumnTop Mt60">
    <span class="Title Fl">民生消费</span>
    <a href="<?php echo base_url().'index.php/picture/channel/consumption_more/'.$consumption_id;?>" target="_blank" class="Fr Mr10">MORE</a>
				<span class="Line Fr Mr10">
				<em class="Y"></em>
				</span>
    <span class="Sub Fr Ml20 Bs">+订阅此栏目</span>
    <!-- <span class="NoSub Fr Ml20 Bs">√已订阅</span> -->
</div>
<div class="PicList Cf">
   <?php foreach ($consumption as $key => $value) { ?>
    <a href="<?php echo base_url().'index.php/picture/articles/'.$value['articleId'].'/'.$value['partId']; ?>" target="_blank">
        <img src="<?php echo $value['show'];?>">
        <em><?php echo $value['title'];?></em>
    </a>
<?php }?>
</div>

<div class="ColumnTop Mt60">
    <span class="Title Fl">财富生活</span>
    <a href="<?php echo base_url().'index.php/picture/channel/life_more/'.$life_id;?>" target="_blank" class="Fr Mr10">MORE</a>
				<span class="Line Fr Mr10">
				<em class="Y"></em>
				</span>
    <span class="Sub Fr Ml20 Bs">+订阅此栏目</span>
    <!-- <span class="NoSub Fr Ml20 Bs">√已订阅</span> -->
</div>
<div class="PicList Cf">
    <?php foreach ($life as $key => $value) { ?>
    <a href="<?php echo base_url().'index.php/picture/articles/'.$value['articleId'].'/'.$value['partId']; ?>" target="_blank">
        <img src="<?php echo $value['show'];?>">
        <em><?php echo $value['title'];?></em>
    </a>
    <?php }?>
</div>
<div class="ColumnTop Mt60">
    <span class="Title Fl">其他</span>
    <a href="<?php echo base_url().'index.php/picture/channel/other_more/'.$other_id;?>" target="_blank" class="Fr Mr10">MORE</a>
				<span class="Line Fr Mr10">
				<em class="Y"></em>
				</span>
    <span class="Sub Fr Ml20 Bs">+订阅此栏目</span>
    <!-- <span class="NoSub Fr Ml20 Bs">√已订阅</span> -->
</div>
<div class="PicList Cf">
    <?php foreach ($other as $key => $value) { ?>
    <a href="<?php echo base_url().'index.php/picture/articles/'.$value['articleId'].'/'.$value['partId']; ?>" target="_blank">
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
    ipad.slide3('#Slider3');
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