d<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div data-role="page" role="main" data-theme="g">
<div id="header" data-role="header"> 
		<h1><?php bloginfo('name'); ?></h1>
			<a href="<?php bloginfo('url'); ?>" data-icon="home" title="Home" data-type="button" class="ui-btn-right">Home</a>
	</div><!-- end header -->
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'ERROR - 404 Page Not Found', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
<div data-role="field-container" align="CENTER">
	<form action="<?php bloginfo('url'); ?>" method="get">
		<label>Search for:</label>
		<input type="search" data-theme="g" name='s'>
		<input type="submit" data-role="nojs" value="submit" />
	</form>
</div>				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
<div id="footer" data-role="footer"> 
	<h4>Copyright 2009 - 2011. All Rights Reserved</h4>
</div> 
</div><!-- end wrapper --><?php get_footer(); ?>