
<div id="content_panel">
	<div id="product_layout_1">
		<div class="top">
			<div class="product_images">
				<div class="product_image_1">
					<img src="http://localhost/chombo/includes/image/Chombo.jpg"/>
				</div>
				<div class="product_image_small">
				<div>Product images</div>
					<div class="product_image_2">
						<img src="<?php echo base_url($image . 'Chombo.jpg'); ?>"/>
					</div>
					<div class="product_image_3">
						<img src="<?php echo base_url($image . 'Chombo.jpg'); ?>"/>
					</div>
					<div class="product_image_4">
						<img src="<?php echo base_url($image . 'Chombo.jpg'); ?>"/>
					</div>
				</div>
			</div>
			<div class="product_info">
				<h1><?php echo $item['title']; ?></h1>
				<div class="product_description">
					<p><?php echo $item['description']; ?></p>
				</div>
				<div class="price">
					Price: <h2 class="price">$<?php echo $item['price']; ?></h2>
				</div>
				<div class="options">
					<!-- <div class="buying_options">
						<div class="select">
							<select id="color">
								<option value = "1">Yellow</option>
								<option value = "2">Red</option>
								<option value = "3">Blue</option>
								<option value = "4">Floral</option>
							</select>
						</div>
						<div class="select">
							<select id="size">
								<option value = "1">Small</option>
								<option value = "2">Medium</option>
								<option value = "3">Large</option>
								<option value = "4">X-Large</option>
							</select>
						</div>
					</div> -->
					<div class="buying">
						<div class="cart">
							<form action="<?php echo base_url('index.php/items/purchase_process'); ?>" method="POST">
								<input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
							<button class="add">Buy Now</button>
							</form>
						</div>
					</div>
				</div>
				<div class="social">
					<span class="share">Share This:</span><span class="buttons"><img src="http://i.imgur.com/M8D8rr8.jpg"/></span>
				</div>
			</div>
		</div>
		<!-- <div class="bottom">
			<div class="reviews">
				<div class="head">
					<h2>Reviews</h2>
				</div>
				<div class="rev_items">
					<span class="name">Marty McFly</span><span class="stars"><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star-half-o fa-2x"></i><i class="fa fa-star-o fa-2x"></i></span>
					<p class="review_text">"Check out that four by four. That is hot. Someday, Jennifer, someday. Wouldn't it be great to take that truck up to the lake. Throw a couple of sleeping bags in the back. Whoa, wait, Doc. Here you go, lady. There's a quarter. Well, it will just happen. Like the way I met your father..."</p>
					<p class="fullReview"><a href="#">View Full Review</a></p>
					<span class="writeReview"><a href="#">Write your Own Review</a></span>
				</div>
			</div>
			<div class="related">
				<div class="head">
					<h2>Related Products</h2>
				</div>
				<div class="rel_items">
					<div class="relatedProducts">
						<div class="products">
							<h4 class="title">Flower Dress</h4>
							<div class="image">
								<img src="http://i.imgur.com/qyk1gD3.jpg"/>
							</div>
							<h4 class="price">$34</h4>
						</div>
						<div class="products">
							<h4 class="title">USA Shirt</h4>
							<div class="image">
								<img src="http://i.imgur.com/Bt4ypgM.jpg"/>
							</div>
							<h4 class="price">$45</h4>
						</div>
						<div class="products">
							<h4 class="title">Skull Shirt</h4>
							<div class="image">
								<img src="http://i.imgur.com/nhODrN6.jpg"/>
							</div>
							<h4 class="price">$39</h4>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</div>
