
	<footer class="site-footer" itemscope itemtype="http://schema.org/WPFooter"><div class="wrap"><p>Copyright &#x000A9;&nbsp;2015 &#x000B7; <a href="http://my.studiopress.com/themes/parallax/">Parallax Pro Theme</a> on <a href="http://www.studiopress.com/">Genesis Framework</a> &#x000B7; <a href="http://wordpress.org/">WordPress</a> &#x000B7; <a href="http://www.theoaksonwoodville.com/wp-login.php">Log in</a></p></div></footer>



	</div> <!-- end of .site-container -->

<!-- footer scripts -->
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="<?php echo base_url($js . 'jquery.js'); ?>"></script> 
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

<!-- To add a custom js file to the footer for the current view just add:
			$this->data('custom_js_foot') = array({list of items});
		to the current method loading this view in the controller -->
<?php if (!empty($custom_js_foot)) foreach ($custom_js_foot as $cjsh) { ?>
	<script type='text/javascript' src='<?php echo base_url($js . $cjsf); ?>'></script>
<?php } ?>
<!-- other sources -->
<script type='text/javascript' src='http://www.theoaksonwoodville.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript' src='http://www.theoaksonwoodville.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.3'></script>
</body>
</html>