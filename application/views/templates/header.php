<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US">
<head itemscope itemtype="http://schema.org/WebSite">
	<meta charset="UTF-8">
	<title>Gegnesis Theme: Change one widget background color</title>
	<!-- main style -->
	<link rel="stylesheet" href="<?php echo base_url($css . 'style.css'); ?>">
	<?php if (!empty($custom_css)) foreach ($custom_css as $ccss) { ?>
		<script type='text/javascript' src='<?php echo base_url($css . $ccss); ?>'></script>
	<?php } ?>
	<!-- meta tags -->
	<meta name="description" content="Example Description" />
	<meta name="robots" content="noodp,noydir" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta itemprop="name" content="Assisted Living Home Care" />
	<meta itemprop="url" content="http://www.theoaksonwoodville.com/" />
	<!-- other styles -->
	<style id='parallax-pro-theme-inline-css' type='text/css'>
	.home-section-1 { background-image: url(http://www.theoaksonwoodville.com/wp-content/uploads/2015/10/The-Oaks-On-Woodville-Assisted-Living.png); }.home-section-3 { background-image: url(http://www.theoaksonwoodville.com/wp-content/uploads/2015/10/creek-and-old-growth-forest-larch-mountain.jpg); }.home-section-5 { background-image: url(http://www.theoaksonwoodville.com/wp-content/themes/parallax-pro/images/bg-5.jpg); }
	</style>
	<link rel='stylesheet' id='parallax-google-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%7CSorts+Mill+Goudy&#038;ver=1.2' type='text/css' media='all' />
	<!-- head scripts -->
	<script type='text/javascript' src="<?php echo base_url($js . 'jquery.js'); ?>"></script>
	<script type='text/javascript' src='<?php echo base_url($js . 'jquery-migrate.min.js'); ?>'></script>
	<script type='text/javascript' src='<?php echo base_url($js . 'responsive-menu.js'); ?>'></script>
	<?php if (!empty($custom_js_head)) foreach ($custom_js_head as $cjsh) { ?>
		<script type='text/javascript' src='<?php echo base_url($js . $cjsh); ?>'></script>
	<?php } ?>
	<script type='text/javascript' src='<?php echo base_url($js . 'parallax.js'); ?>'></script>
	<style type="text/css">.site-title a { background: url(http://safootballer.com.au/wp-content/uploads/2014/08/your-logo-ehre.png) no-repeat !important; }</style>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->