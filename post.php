<?php $this->need('header.php'); ?>

    <div id="content" class="w640 box">
	<div id="post-1" class="post-1 post type-post status-publish format-standard hentry category-uncategorized">
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

		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
