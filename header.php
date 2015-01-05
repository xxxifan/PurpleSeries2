<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
    <!–[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]–>
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-1.4.2.min.js'); ?>"></script>
<!-- js脚本开始  -->
<script type="text/javascript">
		jQuery(document).ready(function (a) {
    var c = a("#updown").offset().top;
    $body = window.opera ? document.compatMode == "CSS1Compat" ? a("html") : a("body") : a("html,body");
    a(window).scroll(function () {
        a("#updown").animate({
            top: a(window).scrollTop() + c + "px"
        },
 		{
     queue: false,
     duration: 500
    })
    });
    a("#up").mouseover(function() {
    	a(this).css({"background":"url(images/huadong.png) -30 0 no-repeat"})
    })
    a("#up").mouseout(function() {
    	a(this).css({"background":"url(images/huadong.png) 1 0 no-repeat"})
    })
    a("#up").click(function () {
        $body.animate({
            scrollTop: "0px"
        },
 			1000)
    });

    a("#down").mouseover(function() {
    	a(this).css({"background":"url(images/huadong.png) -30 -60 no-repeat"})
    })
    a("#down").mouseout(function() {
    	a(this).css({"background":"url(images/huadong.png) 1 -60 no-repeat"})
    })
    a("#down").click(function () {
        $body.animate({
            scrollTop: a("#footer").offset().top
        },
 1000)
    });

    a("#comt").mouseover(function() {
    	a(this).css({"background":"url(images/huadong.png) -30 -30 no-repeat"})
    })
    a("#comt").mouseout(function() {
    	a(this).css({"background":"url(images/huadong.png) 1 -30 no-repeat"})
    })
    a("#comt").click(function () {
        $body.animate({
            scrollTop: a("#comments").offset().top
        },
 1000)
    })
});
</script>
</head>

<body>
<div id="updown">
<div id="up"></div>
<div id="comt"></div>
<div id="down"></div>
</div>
<div class="w640 box header h120">
	<div class="selfinfo">
		<div class="logo">
		<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" alt="<?php $this->options->title() ?>"><?php $this->options->title() ?></a>
		<div class="description"><?php $this->options->description() ?></div>
		</div>
		
	</div>
	<div class="tool">	
		<ul class="sidelist">
			<li><a class="list_4" href="<?php $this->options->siteUrl(admin); ?>" title="登录">登录</a></li>
		
			<li><a class="list_2" href="<?php $this->options->file() ?>" title="归档">归档</a></li>
			
			<li><a class="list_1"href="<?php $this->options->siteUrl(feed); ?>" title="RSS订阅">RSS订阅</a></li>
		</ul>
		<div class="searchform">
			<form id="searchform" method="get" action="">
				<input type="text" value="" name="s" id="s" size="30" placeholder="请输入关键词进行搜索">
				<input type="submit" id="searchsubmit" class="hide" value="搜 索">
			</form>
		</div>

	</div>
	<div class="menu-header">
	<ul class="menu">
    <li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
    <?php endwhile; ?>
	</ul>
	</div>
</div>
