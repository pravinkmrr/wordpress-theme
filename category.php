<?php
/**
 * The template for displaying Search Results pages.
 */
get_header(); ?>
<div data-role="page" role="main" data-theme="g">
<div id="header" data-role="header"> 
		<h1><?php bloginfo('name'); ?></h1>
		<div data-role="fieldcontain" align="CENTER">
			<form action="<?php bloginfo('url'); ?>" method="get">
				<input type="search" data-theme="g" name='s'>
				<input type="submit" data-role="nojs" value="submit" />
			</form>
		</div>
		<a href="<?php bloginfo('url'); ?>" data-icon="home" title="Home" data-type="button" class="ui-btn-right">Home</a>
	</div><!-- end header -->
	<div id="content" data-role="content">
	<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php single_cat_title(); ?></h1>
<ul data-role="listview" data-theme="g" data-inset="true">
<?php while ( have_posts() ) : the_post(); ?>
<li>
	<a href="<?php the_permalink(); ?>" data-transition="flip"><?php the_title(); ?></a>
	<a href="<?php echo get_pagenum_link(get_query_var('paged'));?>#last" title="rating" data-transition="pop" data-rel="dialog" data-theme="g"></a>
</li>
<?php endwhile; // End the loop. Whew. ?>
</ul><!--end data-role="collapsible-set"-->
	<?php else : ?>
			<div id="post-0" class="post no-results not-found">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
	<div data-role="field-container" align="CENTER">
	<form action="<?php bloginfo('url'); ?>" method="get">
	<label>Search for:</label>
	<input type="search" name='s'>
	<input type="submit" data-role="nojs" value="submit" />
	</form>
</div>
			</div><!-- .entry-content -->
			</div><!-- #post-0 -->
	<?php endif; ?>
</div><!-- end content -->


<div data-role="footer" class="ui-footer-fixed"> 
<div data-role="navbar">
	<ul>	
		<?php emm_paginate(); ?>
	</ul>
</div>
	<h4>Copyright 2009 - 2011. All Rights Reserved</h4>
</div> 
</div><!-- end wrapper -->
<div id="last" data-role="page" data-theme="g">
	<div data-role="header" data-theme="g">
		<h1>Ratings</h1>
	</div>
	<div data-role="content" data-theme="g">
		<input data-role="slider" max="10" min="0" val="0" step="1" data-theme="g">
	</div>
	<div data-role="footer">
	</div>
</div>