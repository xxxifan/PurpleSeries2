<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
			<h4><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?> &raquo;</h4>
            
            <?php $comments->pageNav(); ?>
            
            <?php $comments->listComments(); ?>
            
            <?php endif; ?>

            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            <div id="respond">
			<h3 id="reply-title"><?php _e('添加新评论'); ?> &raquo;</h3>
			<form method="post" action="<?php $this->commentUrl() ?>" id="commentform">
                <?php if($this->user->hasLogin()): ?>
				<p>Logged in as <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                <?php else: ?>
				<p class="comment-form-author">
                    <label for="author"><?php _e('称呼'); ?><span class="required">*</span></label>
					<input type="text" name="author" id="author" class="text" size="30" aria-required="true" value="<?php $this->remember('author'); ?>" />
				</p>
				<p class="comment-form-email">
                    <label for="email"><?php _e('电子邮件'); ?><?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?></label>
					<input type="text" name="mail" id="email"  size="30" aria-required="true" value="<?php $this->remember('mail'); ?>" />
				</p>
				<p class="comment-form-url">
                    <label for="url"><?php _e('网站'); ?><?php if ($this->options->commentsRequireURL): ?><span class="required">*</span><?php endif; ?></label>
					<input type="text" name="url" id="url" class="text" size="30" aria-required="true" value="<?php $this->remember('url'); ?>" />
				</p>
                <?php endif; ?>
				<p class="comment-form-comment">
					<textarea rows="5" id="comment" cols="50" name="text" class="textarea" aria-required="true"><?php $this->remember('text'); ?></textarea>
				</p>
				<p class="form-submit"><input type="submit" id="submit" value="<?php _e('提交评论'); ?>" /></p>
			</form>
            </div>
			</div>
            <?php else: ?>
            <h4><?php _e('评论已关闭'); ?></h4>
            <?php endif; ?>
		</div>
