<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	 
	<div data-role="collapsible" data-collapsed="true" data-theme="g">
	<h2 class="h2comments"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></h2>
		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>

		<ol class="commentlist">
	<?php wp_list_comments($coms);?>		
		</ol>

		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p>Comments are closed.</p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<h2><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" data-ajax="true" >

		<?php if ( is_user_logged_in() ) : ?>
<p>Post your comment Mr/Ms.<?php echo $user_identity; ?>.</p>

<?php else : ?>
<div data-role="field-container" data-theme="g">	
	<label for="author">Name <?php if ($req) echo "(required)"; ?></label>
	<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
	<label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label>
	<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
	<label for="url">Website</label>		
	<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
	<label for="comment">Comment</label>		
<?php endif; ?>
	<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
	<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>
	<input type="hidden" name="redirect_to" value="<?php the_permalink(); ?>" />
	<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" data-theme="g"/>
	<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
</div>
<?php endif; ?>
