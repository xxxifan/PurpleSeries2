<?php
/**
 * 这是根据wordpress的一款主题移植过来的，添加了一些我自己的东西，感觉挺不错的，给大家分享了
 * 
 * @package Purple Series 2
 * @author 尘埃
 * @version 1.0.0
 * @link http://kindevil.com
 */
 
 if (isset($_GET["action"]) && $_GET["action"] == "ajax" && Helper::options()->PageType == 1){ 
	while($this->next()): ?>
	<section class="post">
		<header class="post_head">
			<p class="date"><?php $this->date('Y-m-d'); ?></p>
			<h2><a href="<?php $this->permalink() ?>"><?php  $this->sticky(); $this->title() ?></a></h2>
		</header>
		<article class="post_artice">
			<?php $this->content('阅读更多...'); ?>
		</article>
		<p class="cate"><?php $this->category(','); ?> &bull;<a>浏览次数:<?php $this->views(); ?></a>&bull; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></p>
	</section>
<?php endwhile;
}else{
 if(strpos($_SERVER["PHP_SELF"],"themes")){header('Location:/');}
 $this->need('header.php');
?>
<!--content -->
<div id="content" class="w640 box">
	<?php while($this->next()): ?>
	<div id="post-1" class="post-1 post type-post status-publish format-standard hentry category-uncategorized">
		<div class="post-ico ico_text"></div>
		<div class="side">
			<div class="day"><a href="<?php $this->permalink() ?>"><?php $this->date('d'); ?></a></div>
			<div class="month"><a href="<?php $this->permalink() ?>"><?php $this->date('m'); ?></a></div>
		</div>
		<div class="main">
			<div class="title">
				<h2><a href="<?php $this->permalink() ?>" rel="bookmark"><?php  $this->sticky(); $this->title() ?></a></h2>
				<div class="meta">
					<?php $this->author(); ?> / <?php $this->category(','); ?> / <?php $this->date('Y/m/d'); ?>	
				</div>   
			</div>
			<div class="entry">
				<?php $this->content('阅读更多...'); ?>
			</div>
			<div class="tag"><?php $this->tags('', true, ''); ?></div>
		</div>
	</div>
		<?php endwhile; ?>
	<!-- #End Post# --> 
</div>
	<div id="pagenavi" class="pages">
		<span id="hidenavi"><?php $this->pageNav(); ?></span>
		<?php if (Helper::options()->PageType): ?>
			<span><a href="#;">Next Page >></a></span>
			<script type="text/javascript">//无缝载入
				$('#hidenavi').hide();
				$(function(){
					var $Id = 2;
					var all = parseInt($('#pagenavi li a:not(.next):last').text()) + 1; //获取总页数
					var Html = $('#content');
					var Load = $('#pagenavi');
					var state = $('.next');
					var path = $('.page-navigator a.next').attr('href');
					path = path.indexOf('index.php')?('index.php/page/'):('page/');
					if ($Id == all){Load.html('');}
					$('#pagenavi a').live('click',function(){
						var Up = $(this).offset().top - 70 ;
						$.ajax({
							url: '<?php $this->options->siteUrl(); ?>'+ path + $Id +'/?action=ajax',
							dataType: "text",
							beforeSend: function(){Load.html('努力加载中，请稍等……');Load.css("font-size","30px");},
							success:function(a){
								$('html,body').animate({scrollTop: Up},800);
								Html.append(a);
								if($Id < all){
									Load.html('<a href="#;">Next Page >></a>');
								}else{
									Load.html('');				
								}
								ImgChange(); //再次调用图片渐显
								ArtLoading(); //加载标题转换
								PageLoder(); //页面延迟加载
							}
						});
				$Id++;
				return false;
			});
		});
		</script>
		<?php endif; ?>
	</div>
	<?php $this->need('footer.php'); ?>
<?php } ?>