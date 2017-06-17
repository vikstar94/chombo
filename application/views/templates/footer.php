
	<footer class="site-footer" itemscope itemtype="http://schema.org/WPFooter"><div class="wrap"><p>Copyright &#x000A9;&nbsp;2015 &#x000B7; <a href="http://my.studiopress.com/themes/parallax/">Parallax Pro Theme</a> on <a href="http://www.studiopress.com/">Genesis Framework</a> &#x000B7; <a href="http://wordpress.org/">WordPress</a> &#x000B7; <a href="<?php echo base_url('index.php/users/login'); ?>">Log in</a></p></div></footer>



	</div> <!-- end of .site-container -->

<!-- footer scripts -->
<!--[if lt IE 9]>
  <script type="text/javascript" src="<?php echo base_url($js . 'excanvas.js'); ?>"></script>      
<![endif]-->
<script type="text/javascript" src="<?php echo base_url($js . 'bootstrap.min.js'); ?>"></script> 
<script type="text/javascript" src='<?php echo base_url($plugin . 'jquery-ui/jquery-ui.custom.min.js'); ?>'></script>
<script type="text/javascript" src="<?php echo base_url($plugin . 'jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url($js . 'caroufredsel.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url($js . 'plugins.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url($plugin . 'breakpoints/breakpoints.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url($plugin . 'dataTables/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url($plugin . 'prettyPhoto-plugin/js/jquery.prettyPhoto.js'); ?>"></script> 

<script type="text/javascript" src="<?php echo base_url($plugin . 'mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url($plugin . 'tagsInput/jquery.tagsinput.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url($plugin . 'bootstrap-switch/bootstrap-switch.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url($plugin . 'blockUI/jquery.blockUI.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url($plugin . 'pnotify/js/jquery.pnotify.min.j'); ?>s"></script>

<script type="text/javascript" src="<?php echo base_url($js . 'theme.js'); ?>"></script>

<!-- To add a custom plugin files to the footer for the current view just add:
			$this->data('custom_plugin_foot') = array({list of items});
		to the current method loading this view in the controller -->
<?php if (!empty($custom_plugin_foot)) foreach ($custom_plugin_foot as $cph) { ?>
	<script type='text/javascript' src="<?php echo base_url($plugin . $cph); ?>"></script>
<?php } ?>
<!-- To add a custom js files to the footer for the current view just add:
			$this->data('custom_js_foot') = array({list of items});
		to the current method loading this view in the controller -->
<?php if (!empty($custom_js_foot)) foreach ($custom_js_foot as $cjsh) { ?>
	<script type='text/javascript' src="<?php echo base_url($js . $cjsh); ?>"></script>
<?php } ?>
<!-- other sources -->
<?php if (!empty($chombo_data)) { ?>
<script async defer
 src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_api_key; ?>&callback=initMap">
</script>
<?php } ?>
<script type='text/javascript' src="<?php echo base_url($js . 'scripts.js'); ?>"></script>
</body>
</html>