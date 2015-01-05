<?php $this->need('header.php'); ?>

    <div id="content" class="w640 box">
    <?php if ($this->have()): ?>
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
    <?php else: ?>
        <div class="post">
            <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>

        <ol class="pages clearfix">
            <?php $this->pageNav(); ?>
        </ol>
    </div><!-- end #content
	<?php $this->need('footer.php'); ?>
