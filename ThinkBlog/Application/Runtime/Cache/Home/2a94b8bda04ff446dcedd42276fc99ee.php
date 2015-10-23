<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>方东个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="这是方东个人博客网站" />
<link href="/think/Public/css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="/think/Public/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<article>
  <header>
    <div class="toptitle">
      <h1>浣溪沙 梅花夢事</h1>
      <p class="byline">——梅如是</p>
    </div>
	  <div class="nav">
      <ul>
        <li><a href="<?php echo U('Index/index');?>">全部博文</a></li>
        <li><a href="<?php echo U('Index/note');?>">留言板</a></li>
		<li><a href="<?php echo U('Index/photo');?>">相册</a></li>
      </ul>
	</div>
    <object id="swftitlebar" data="/think/Public/images/79514.swf" width="100%" height="220" type="application/x-shockwave-flash">
      <param name="allowScriptAccess" value="always">
      <param name="allownetworking" value="all">
      <param name="allowFullScreen" value="true">
      <param name="wmode" value="transparent">
      <param name="menu" value="false">
      <param name="scale" value="noScale">
      <param name="salign" value="1">
    </object>
    <p class="sign">收我南窗梦一帘,人间故事密封缄。</p>
  </header>
  <div class="leftbox">
    <div class="vcard box">
      <h2>个人资料</h2>
      <img src="/think/Public/images/180.jpg" class="photo">
      <p class="fn">姓名：方东</p>
      <p class="nickname">网名：hello world</p>
      <p class="address">现居：鲁东大学北23</p>
      <p class="role">职业：网站设计、网站制作</p>
    </div>
    
  </div>
  <div class="rightbox box">
    <h2>全部博文</h2>
    <h3 class="title">全部博文</h3>
   <ul class="article-list">
     <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/think/index.php/Home/Index/article/id/<?php echo ($vo["id"]); ?>">
      <?php $title=strlen($vo['title']); if($title>40)echo mb_substr($vo['title'],0,20,'utf-8')."..." ;else echo $vo['title']; ?></a><span style="float:right;"><?php echo (date("Y-m-d H:i",$vo["time"])); ?></span></li><br /><?php endforeach; endif; else: echo "" ;endif; ?>
    <div  class="snPages" ><?php echo ($page); ?></div>
   </ul>
  </div>
  <div class="blank"></div>
  <div class="Copyright">
    <ul>
      <a href="/">帮助中心</a><a href="/">空间客服</a><a href="/">投诉中心</a><a href="/">空间协议</a>
    </ul>
    <p>Design by Fangdong</p>
  </div>
</article>
</body>
</html>