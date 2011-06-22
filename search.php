<?php
/**
 * The template for displaying Search Results pages.
 */
get_header(); ?>
<div data-role="page" role="main" data-theme="g">
<div id="header" data-role="header"> 
		<h1><?php bloginfo('name');?></h1>
			<a href="<?php bloginfo('url'); ?>" data-icon="home" title="Home" data-type="button" class="ui-btn-right">Home</a>
	</div><!-- end header -->
	<div id="content" data-role="content">
	<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
<ul data-role="listview" data-theme="g">
<?php while ( have_posts() ) : the_post(); ?>
<li>
<a href="<?php the_permalink(); ?>" transition="pop"><?php the_title(); ?></a></li>
<?php endwhile; // End the loop. Whew. ?>
</ul>
	<?php else : ?>
			<div id="post-0" class="post no-results not-found">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
	<div data-role="field-container" align="CENTER">
	<form action="<?php bloginfo('url'); ?>" method="get">
	<label>Search for:</label>
	<input type="search" data-theme="g" name='s'>
	<input type="submit" data-role="nojs" value="submit" />
	</form>

</div>
			</div><!-- .entry-content -->
			</div><!-- #post-0 -->
	<?php endif; ?>
</div><!-- end content -->

<div id="footer" data-role="footer"> 
	<h4>Copyright 2009 - 2011. All Rights Reserved</h4>
</div> 
</div><!-- end wrapper --><?php get_footer(); ?>




