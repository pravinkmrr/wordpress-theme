<div id="wrapper" data-role="page" data-theme="g">
	<div id="header" data-role="header" data-inset="true"> 
		<h1>Movie Times</h1>
	<a href="<?php bloginfo('url'); ?>/#last" data-icon="gear" title="Home" data-type="button" data-iconpos="right" class="ui-btn-right" data-theme="g" data-rel="dialog">Change City</a>
	</div><!-- end header -->

<div id="content" data-role="content">
	<div data-role="fieldcontain">
		<form action="" name="city">
			<?php wp_dropdown_categories(); ?>
		</form>
	</div>
</div>
<div data-role="footer" class="ui-footer-fixed"> 
	<h4>Copyright 2009 - 2011. All Rights Reserved</h4>
</div> 
</div><!-- end wrapper -->
<div id="last" data-role="page" data-theme="g">
	<div id="header" data-role="header" data-inset="true"> 
		<h1>Change City</h1>
	</div><!-- end header -->

<div id="content" data-role="content">
	<div data-role="fieldcontain">
		<form action="" name="city">
			<?php wp_dropdown_categories(array('show_option_none'=>'Select City')); ?>
		</form>
	</div>
</div>
<div data-role="footer" data-position="fixed"> 
</div> 
</div><!-- end wrapper -->