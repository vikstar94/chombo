	<footer class="site-footer" itemscope itemtype="http://schema.org/WPFooter"><div class="wrap"><p>Copyright &#x000A9;&nbsp;2015 &#x000B7; <a href="http://my.studiopress.com/themes/parallax/">Parallax Pro Theme</a> on <a href="http://www.studiopress.com/">Genesis Framework</a> &#x000B7; <a href="http://wordpress.org/">WordPress</a> &#x000B7; <a href="http://www.theoaksonwoodville.com/wp-login.php">Log in</a></p></div></footer>

	</div> <!-- end of .site-container -->

<!-- footer scripts -->
<!-- 
it is alrady included!
TODO: must check
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<script type='text/javascript' src="<?php echo base_url($js . 'index.js'); ?>"></script>
<?php if (!empty($custom_js_foot)) foreach ($custom_js_foot as $cjsh) { ?>
	<script type='text/javascript' src='<?php echo base_url($js . $cjsf); ?>'></script>
<?php } ?>
<!-- other sources -->
<script type='text/javascript' src='http://www.theoaksonwoodville.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript' src='http://www.theoaksonwoodville.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.3'></script>
</body>
</html>