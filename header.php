<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|', true, 'right'); ?></title>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.4.4.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.mobile.4.1.js"></script>
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
