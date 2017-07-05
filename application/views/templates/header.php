<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if IE 9]>	<html class="ie ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en-US"><!--<![endif]-->
<head itemscope itemtype="http://schema.org/WebSite">
	<meta charset="UTF-8">
	<title>Chombos</title>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS -->

	<link href="<?php echo base_url($css . 'bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url($css . 'font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="<?php echo base_url($css . 'font-awesome-ie7.min.css'); ?>><![endif]-->
    <link href="<?php echo base_url($css . 'font-entypo.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url($css . 'fonts.css'); ?>"  rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url($plugin . 'jquery-ui/jquery-ui.custom.min.css'); ?>" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url($plugin . 'prettyPhoto-plugin/css/prettyPhoto.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url($plugin . 'isotope/css/isotope.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url($plugin . 'pnotify/css/jquery.pnotify.css'); ?>" media="screen" rel="stylesheet" type="text/css">    
	<link href="<?php echo base_url($plugin . 'google-code-prettify/prettify.css'); ?>" rel="stylesheet" type="text/css"> 
   
    <link href="<?php echo base_url($plugin . 'mCustomScrollbar/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url($plugin . 'tagsInput/jquery.tagsinput.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url($plugin . 'bootstrap-switch/bootstrap-switch.css'); ?>" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url($plugin . 'daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url($plugin . 'bootstrap-timepicker/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url($plugin . 'colorpicker/css/colorpicker.css'); ?>" rel="stylesheet" type="text/css"> 

    <!-- specific CSS -->
	<link rel="stylesheet" href="<?php echo base_url($css . 'style.css'); ?>">
	<!-- To add a custom css file to the current view just add:
			$this->data('custom_css') = array({list of items});
		to the current method loading this view in the controller -->
	<?php if (!empty($custom_css)) foreach ($custom_css as $ccss) { ?>
		<link rel="stylesheet" href="<?php echo base_url($css . $ccss); ?>">
	<?php } ?>
	<link rel='stylesheet' id='parallax-google-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%7CSorts+Mill+Goudy&#038;ver=1.2' type='text/css' media='all' />

	<!-- Responsive CSS -->
    <link href="<?php echo base_url($css . 'theme-responsive.min.css'); ?>" rel="stylesheet" type="text/css"> 

	<!-- head scripts -->
	<script type="text/javascript" src="<?php echo base_url($js . 'jquery.js'); ?>"></script> 
	<script type="text/javascript" src="<?php echo base_url($js . 'modernizr.js'); ?>"></script> 
    <script type="text/javascript" src="<?php echo base_url($js . 'mobile-detect.min.js'); ?>"></script> 
    <script type="text/javascript" src="<?php echo base_url($js . 'mobile-detect-modernizr.js'); ?>"></script> 
	<script type='text/javascript' src='<?php echo base_url($js . 'jquery-migrate.min.js'); ?>'></script>
	<script type='text/javascript' src='<?php echo base_url($js . 'responsive-menu.js'); ?>'></script>
	<!-- To add a custom js file to the header for the current view just add:
			$this->data('custom_js_head') = array({list of items});
		to the current method loading this view in the controller -->
	<?php if (!empty($custom_js_head)) foreach ($custom_js_head as $cjsh) { ?>
		<script type='text/javascript' src='<?php echo base_url($js . $cjsh); ?>'></script>
	<?php } ?>
	<style type="text/css">.site-title a { background: url(<?php echo base_url($image . 'chombo_logo.png'); ?>) no-repeat !important;}</style>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo base_url($js . 'html5shiv.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url($js . 'respond.min.js'); ?>"></script>     
    <![endif]-->
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>

<body class="home blog custom-header header-image full-width-content parallax-home" itemscope itemtype="http://schema.org/Blog">
<div class="site-container">
	<header class="site-header">
		<div class="wrap">
			<div class="title-area">
				<h1 class="site-title" itemprop="headline">
					<a href="<?php echo base_url('/index.php'); ?>">Home</a>
				</h1>
			</div>
			<div class="widget-area header-widget-area">
				<section id="nav_menu-2" class="widget widget_nav_menu">
					<div class="widget-wrap">
						<nav class="nav-header" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<ul id="menu-primary-navigation" class="menu genesis-nav-menu">
								<li id="menu-item-617" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-617"><a href="<?php echo base_url('/index.php'); ?>" itemprop="url"><span itemprop="name">Home</span></a></li>
								<li id="menu-item-597" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-597">
									<a href="<?php echo base_url('/index.php/items'); ?>" itemprop="url"><span itemprop="name">Store</span></a>
									<!-- <ul class="sub-menu">
										<li id="menu-item-606" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-606"><a href="#" itemprop="url"><span itemprop="name">Product 1</span></a> -->
											<!-- <ul class="sub-menu">
												<li id="menu-item-623" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-623"><a href="#" itemprop="url"><span itemprop="name">Content/Sidebar</span></a></li>
												<li id="menu-item-622" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-622"><a href="#" itemprop="url"><span itemprop="name">Sidebar/Content</span></a></li>
												<li id="menu-item-621" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-621"><a href="#" itemprop="url"><span itemprop="name">Full Width Content</span></a></li>
											</ul> -->
										<!-- </li>
										<li id="menu-item-604" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-604"><a href="http://demo.studiopress.com/parallax/author/admin/" itemprop="url"><span itemprop="name">Product 2</span></a></li>
										<li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-620"><a href="#" itemprop="url"><span itemprop="name">Product 3</span></a></li>
										<li id="menu-item-603" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-603"><a href="http://www.theoaksonwoodville.com/?cat=2" itemprop="url"><span itemprop="name">Product 4</span></a></li>
									</ul> -->
								</li>
								<li id="menu-item-598" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-598"><a href="<?php echo base_url('/index.php/pages/contactus'); ?>" itemprop="url"><span itemprop="name">Contact Us</span></a></li>

								<?php if (empty($user_data)) { ?>
									<li id="menu-item-616" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-616"><a href="<?php echo base_url('index.php/users/login'); ?>" itemprop="url"><span itemprop="name">Login</span></a>
									</li>
								<?php } else { ?>
									<li id="menu-item-616" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-616"><a href="<?php echo base_url('/index.php/users/profile/'.$user_data->id); ?>" itemprop="url"><span itemprop="name"><?php echo "Hello, $user_data->first_name"; ?></span></a>
										<ul class="sub-menu">
											<li id="menu-item-606" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-606"><a href="<?php echo base_url('index.php/users/profile/'.$user_data->id); ?>" itemprop="url"><span itemprop="name">My Profile</span></a></li>
											<li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-620"><a href="#" itemprop="url"><span itemprop="name">Friends</span></a></li>
											<li id="menu-item-603" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-603"><a href="<?php echo base_url('index.php/users/logout'); ?>" itemprop="url"><span itemprop="name">Logout</span></a></li>
										</ul>
									</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</section>
			</div>
		</div>
	</header>
