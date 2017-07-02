
	<footer class="flex-rw" itemscope itemtype="http://schema.org/WPFooter">
	  <ul class="footer-list-top">
	    <li><h4 class="footer-list-header">Find Out More</h4></li>
	    <li><a href='#' class="generic-anchor footer-list-anchor">The Chombos</a></li>
	    <li><a href='#' class="generic-anchor footer-list-anchor">Purchase Oprions</a></li>
	    <li><a href='#' class="generic-anchor footer-list-anchor">Something Else</a></li>
	    <li><a href='#' class="generic-anchor footer-list-anchor" target="_blank">The Mobile App</a></li>
	  </ul>
	  <ul class="footer-list-top">
	    <li id='help'><h4 class="footer-list-header">Please Help Me</h4></li>
	    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT US</a></li>
	    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
	    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">SUBSCRIBE</a></li>
	    <li><a href='#' itemprop="significantLink" class="generic-anchor footer-list-anchor">FORUM</a></li>
	  </ul>
	  <section class="footer-social-section flex-rw">
	      <span class="footer-social-overlap footer-social-connect">
	      CONNECT <span class="footer-social-small">with</span> US
	      </span>
	      <span class="footer-social-overlap footer-social-icons-wrapper">
	      <a href="#" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fa fa-facebook"></i></a>
	      <a href="#" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fa fa-twitter"></i></a>
	      <a href="#" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
	      <a href="#" class="generic-anchor" target="_blank" title="Pinterest" itemprop="significantLink"><i class="fa fa-linkedin"></i></a>
	      </span>
	  </section>
	  <section class="footer-bottom-section flex-rw">
	<div class="footer-bottom-wrapper">   
	<i class="fa fa-copyright" role="copyright">
	 
	</i> 2017 The Chombo Project <address class="footer-address" role="company address">Vallencia, SP</address><span class="footer-bottom-rights"> - All Rights Reserved - </span>
	    </div>
	    <div class="footer-bottom-wrapper">
	    <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">Terms</a> | <a href="/privacy-policy.html" class="generic-anchor" rel="nofollow">Privacy</a>
	      </div>
	  </section>
	</footer>



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