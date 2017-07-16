<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="site-inner">
	<div id="content_panel">
		<div class="row">
			<div class="col-sm-2 nopadding">
				<nav class="nav-sidebar">
					<ul class="nav tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Chombos</a></li>
						<li class=""><a href="#tab2" data-toggle="tab">Parts</a></li>
					</ul>
				</nav>
				<!-- Side Nav --> 
			</div>
			<!-- col-sm-2 --> 
			<div class="col-sm-10 nopadding">
				<div class="panel widget light-widget panel-bd-top">
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane active text-style" id="tab1">
								<div class="content-list content-blog-large">
									<ul class="list-wrapper">
									<?php foreach ($items as $item) { ?>
										<li>
											<div class="menu-icon"> <img alt="example image" src="<?php echo base_url($image). '/Chombo.jpg'; ?>"> </div>
											<div class="menu-text">
											<h2 class="blog-title font-bold letter-xs"><a href="<?php echo base_url('index.php/items/view/' . $item['id']); ?>"> <?php echo $item['title'];?> </a></h2>
											<p> <?php echo $item['short_description']; ?> ...</p>
											<a class="btn vd_btn vd_bg-green btn-sm" href="<?php echo base_url('index.php/items/view/' . $item['id']); ?>">Read More</a> </div>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
							<div class="tab-pane text-style" id="tab2">
								<div class="content-list content-blog-large">
									<ul class="list-wrapper">
										<li>
											<div class="menu-icon"> <img alt="example image" src="<?php echo base_url($image). '/blog/02.jpg'; ?>"> </div>
											<div class="menu-text">
											<h2 class="blog-title font-bold letter-xs"><a href="#"> Part 1 </a></h2>
											<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio eros, imperdiet vel lorem ut, ullamcorper finibus nibh. Integer ullamcorper consectetur nibh at laoreet. Praesent posuere tincidunt congue. Maecenas tortor risus, pulvinar pulvinar eros nec, luctus accumsan odio. Nam vel tincidunt metus. Vivamus blandit mi non leo volutpat, quis fringilla diam accumsan. Donec nec mi dui.</p>
											<p>Sed ultrices purus nec placerat tempor. Donec convallis augue eu ornare dapibus. Donec vitae purus id sem gravida elementum. Maecenas sit amet nunc arcu. Duis laoreet erat id turpis hendrerit, eget mollis enim bibendum. Morbi ut pulvinar diam. Etiam eu sollicitudin metus. ...</p>
											<a class="btn vd_btn vd_bg-green btn-sm" href="#">Read More</a> </div>
										</li>
										<li>
											<div class="menu-icon"> <img alt="example image" src="<?php echo base_url($image). '/blog/02.jpg'; ?>"> </div>
											<div class="menu-text">
											<h2 class="blog-title font-bold letter-xs"><a href="#"> Part 2 </a></h2>
											<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio eros, imperdiet vel lorem ut, ullamcorper finibus nibh. Integer ullamcorper consectetur nibh at laoreet. Praesent posuere tincidunt congue. Maecenas tortor risus, pulvinar pulvinar eros nec, luctus accumsan odio. Nam vel tincidunt metus. Vivamus blandit mi non leo volutpat, quis fringilla diam accumsan. Donec nec mi dui.</p>
											<p>Sed ultrices purus nec placerat tempor. Donec convallis augue eu ornare dapibus. Donec vitae purus id sem gravida elementum. Maecenas sit amet nunc arcu. Duis laoreet erat id turpis hendrerit, eget mollis enim bibendum. Morbi ut pulvinar diam. Etiam eu sollicitudin metus. ...</p>
											<a class="btn vd_btn vd_bg-green btn-sm" href="#">Read More</a> </div>
										</li>
										<li>
											<div class="menu-icon"> <img alt="example image" src="<?php echo base_url($image). '/blog/02.jpg'; ?>"> </div>
											<div class="menu-text">
											<h2 class="blog-title font-bold letter-xs"><a href="#"> Part 3 </a></h2>
											<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio eros, imperdiet vel lorem ut, ullamcorper finibus nibh. Integer ullamcorper consectetur nibh at laoreet. Praesent posuere tincidunt congue. Maecenas tortor risus, pulvinar pulvinar eros nec, luctus accumsan odio. Nam vel tincidunt metus. Vivamus blandit mi non leo volutpat, quis fringilla diam accumsan. Donec nec mi dui.</p>
											<p>Sed ultrices purus nec placerat tempor. Donec convallis augue eu ornare dapibus. Donec vitae purus id sem gravida elementum. Maecenas sit amet nunc arcu. Duis laoreet erat id turpis hendrerit, eget mollis enim bibendum. Morbi ut pulvinar diam. Etiam eu sollicitudin metus. ...</p>
											<a class="btn vd_btn vd_bg-green btn-sm" href="#">Read More</a> </div>
										</li>
									</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Panel Widget --> 

			</div>
			<!-- col-md-4 -->
		</div>
	</div>
</div>