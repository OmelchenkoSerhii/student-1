<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&family=Barlow:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
	<?php the_field('header_scripts','option'); ?>
</head>

<?php
$body_classes = '';

$headerTransparent = get_field('transparent_header');
$headerDark = get_field('dark_header');

if($headerTransparent || is_single() || is_404() || is_category()):
	$body_classes.='header-transparent header__transparent';
endif;

if($headerDark || is_404() || is_category() || is_product() || is_singular('job')):
	$body_classes.=' header__dark';
endif;

?>
<body <?php body_class($body_classes); ?>>
	
	<?php 
	get_template_part('template-parts/header/header'); ?>
	

	<div id="main">