<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US">
<head itemscope itemtype="http://schema.org/WebSite">
	<meta charset="UTF-8">
	<title>Chombos</title>
	<!-- main style -->
	<link rel="stylesheet" href="<?php echo base_url($css . 'style.css'); ?>">
	<!-- To add a custom css file to the current view just add:
			$this->data('custom_css') = array({list of items});
		to the current method loading this view in the controller -->
	<?php if (!empty($custom_css)) foreach ($custom_css as $ccss) { ?>
		<link rel="stylesheet" href="<?php echo base_url($css . $ccss); ?>">
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
	<!-- To add a custom js file to the header for the current view just add:
			$this->data('custom_js_head') = array({list of items});
		to the current method loading this view in the controller -->
	<?php if (!empty($custom_js_head)) foreach ($custom_js_head as $cjsh) { ?>
		<script type='text/javascript' src='<?php echo base_url($js . $cjsh); ?>'></script>
	<?php } ?>
	<script type='text/javascript' src='<?php echo base_url($js . 'parallax.js'); ?>'></script>
	<style type="text/css">.site-title a { background: url(http://safootballer.com.au/wp-content/uploads/2014/08/your-logo-ehre.png) no-repeat !important; }</style>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>

<body class="home blog custom-header header-image full-width-content parallax-home" itemscope itemtype="http://schema.org/Blog">
<div class="site-container">
	<header class="site-header">
		<div class="wrap">
			<div class="title-area">
				<h1 class="site-title" itemprop="headline">
					<a href="http://localhost/chombo/index.php">Home</a>
				</h1>
			</div>
			<div class="widget-area header-widget-area">
				<section id="nav_menu-2" class="widget widget_nav_menu">
					<div class="widget-wrap">
						<nav class="nav-header" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<ul id="menu-primary-navigation" class="menu genesis-nav-menu">
								<li id="menu-item-617" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-617"><a href="http://localhost/chombo/index.php" itemprop="url"><span itemprop="name">Home</span></a></li>
								<li id="menu-item-597" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-597">
									<a href="http://localhost/chombo/index.php/items" itemprop="url"><span itemprop="name">Store</span></a>
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
								<li id="menu-item-598" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-598"><a href="#" itemprop="url"><span itemprop="name">Contact Us</span></a></li>

								<?php if (!empty($user_data)) { ?>
									<li id="menu-item-616" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-616"><a href="http://localhost/chombo/index.php/users/profile/<?php echo $user_data->id; ?>" itemprop="url"><span itemprop="name"><?php echo "Hello, $user_data->first_name"; ?></span></a>
									</li>
								<?php } else { ?>
									<li id="menu-item-616" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-616"><a href="http://localhost/chombo/index.php/users/login" itemprop="url"><span itemprop="name">Login</span></a>
									</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</section>
			</div>
		</div>
	</header>
