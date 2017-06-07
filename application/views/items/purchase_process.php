<div class="site-inner">

	<div class="vd_title-section clearfix">
		<div class="vd_panel-header">
			<h1>Custom Product Form</h1>
			<small class="subtitle">Form for input any custom product, suited for hosting and custom pc/laptop ,etc.</small></div>
	</div>
	<!-- vd_title-section -->

	<div class="vd_content-section clearfix">
	<div class="row">
	<div class="col-sm-8">
	<div class="panel widget">
	<div class="panel-heading vd_bg-green">
		<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-magic"></i> </span> Select Custom Products </h3>
	</div>
	<div id="wizard-1" class="panel-body vd_custom-product form-wizard">
	<form class="form-horizontal" action="<?php echo base_url('index.php/items/purchase'); ?>" role="form" name="chombo_list" id="chombo_form" method="POST">
	<input type="hidden" name="item_id" value="<?php echo $item_id; ?>" />
	<ul class="nav nav-pills nav-justified">
		<li><a href="#tab1" data-toggle="tab">
		<div class="menu-icon"> 1 </div>
		Sensors </a></li>
		<li><a href="#tab2" data-toggle="tab">
		<div class="menu-icon"> 2 </div>
		Actuators </a></li>
		<li><a href="#tab3" data-toggle="tab">
		<div class="menu-icon"> 3 </div>
		Customizations </a></li>
		<li><a href="#tab4" data-toggle="tab">
		<div class="menu-icon"> 4 </div>
		Finalize </a></li>
	</ul>
	<div class="progress progress-striped active">
	
	<div class="progress-bar vd_bg-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> </div>
	</div>
	<div class="tab-content no-bd">
	<div id="tab1" class="tab-pane">
		<div class="menu-text">
		<?php foreach ($parts['sensors'] as $sensor) { ?>
			<div class="checkbox">
				<label>
					<input name="sensors[]" value="<?php echo $sensor['id']; ?>" type="checkbox">
				<?php echo $sensor['model']; ?></label>
			</div>
		<?php } ?>
		</div>
	</div>
	<!-- #tab-1 -->
	<div id="tab2" class="tab-pane">
		<div class="menu-text">
		<?php foreach ($parts['actuators'] as $actuator) { ?>
			<div class="checkbox">
				<label>
					<input name="actuators[]" value="<?php echo $actuator['id']; ?>" type="checkbox">
				<?php echo $actuator['model']; ?></label>
			</div>
		<?php } ?>
		</div>
	</div>	
	<!-- #tab2 -->
	<div id="tab3" class="tab-pane">
	<div class="form-group content-list">
	<div class="menu-icon"> <i class="fa fa-cloud-upload"></i> </div>
	<div class="menu-text">
	<h3>Backup Services</h3>
	<p class="help-inline">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios45" value="option1" checked="" type="radio">
	No Backup </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios46" value="option2" type="radio">
	10 GB Backup per week <span class="vd_red">[Add $10.00]</span> </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios47" value="option2" type="radio">
	20 GB Backup per week <span class="vd_red">[Add $20.00]</span> </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios48" value="option2" type="radio">
	30 GB Backup per week <span class="vd_red">[Add $30.00]</span> </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios49" value="option2" type="radio">
	40 GB Backup per week <span class="vd_red">[Add $40.00]</span> </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios50" value="option2" type="radio">
	50 GB Backup per week <span class="vd_red">[Add $50.00]</span> </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios51" value="option2" type="radio">
	60 GB Backup per week <span class="vd_red">[Add $60.00]</span> </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios11" id="optionsRadios52" value="option2" type="radio">
	100 GB Backup per week <span class="vd_red">[Add $100.00]</span> </label>
	</div>
	</div>
	</div>
	<!-- form-group -->
	<div class="form-group content-list">
	<div class="menu-icon"> <i class="fa fa-fire"></i> </div>
	<div class="menu-text">
	<h3>Firewall</h3>
	<p class="help-inline">Please select your firewall below:</p>
	<div class="radio">
	<label>
	<input name="optionsRadios12" id="optionsRadios53" value="option1" checked="" type="radio">
	No Firewall </label>
	</div>
	<div class="radio">
	<label>
	<input name="optionsRadios12" id="optionsRadios54" value="option1" type="radio">
	Super Firewall </label>
	</div>
	</div>
	<!-- menu-text --> 
	</div>
	<!-- form-group --> 

	</div>
	<!-- #tab3 -->
	<div id="tab4" class="tab-pane">
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Datacenter</strong><br/>
	Los Angeles </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$0</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Processor</strong><br/>
	AMD Athlon II X4 631 Quad-Core </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$30</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Hard Drive 1</strong><br/>
	500 GB SATA (7200 RPM) </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$30</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Hard Drive 2</strong><br/>
	1 TB SATA (7200 RPM) </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$40</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>RAM</strong><br/>
	8 GB DDR3 1333MHZ ECC </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$20</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Bandiwidth</strong><br/>
	10 TB Bandwidth </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$20</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Operating System</strong><br/>
	CentOS 6.2 - 64 bit </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$0</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Control Panel</strong><br/>
	No Control Panel </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$20</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Backup Services</strong><br/>
	No Backup Services </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$20</span> </div>
	</div>
	<div class="row mgbt-xs-5">
	<div class="col-xs-9"> <span class="product-title"><strong>Firewall</strong><br/>
	No Firewall </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$20</span> </div>
	</div>
	<div class="row mgbt-xs-5 ">
	<div class="col-xs-9"> <span class="product-title"><strong>Management</strong><br/>
	Extreme Management </span> </div>
	<div class="col-xs-3  text-right"> <span class="price">$30</span> </div>
	</div>
	<div class="row mgbt-xs-0">
	<div class="col-xs-8">
	<h3 class="total-title font-semibold text-right">Total</h3>
	</div>
	<div class="col-xs-4  text-right">
	<h3 class="font-semibold  mgbt-xs-0">$250</h3>
	<span class="help-inline">monthly</span> </div>
	</div>
	</div>
	<!-- #tab5 --> 

	</div>
	<!-- tab-content -->
	<div class="form-actions-condensed wizard text-right"> <a class="btn vd_btn prev" href="javascript:void(0);"><span class="menu-icon"><i class="fa fa-fw fa-chevron-circle-left"></i></span> Previous</a> <a class="btn vd_btn next" href="javascript:void(0);">Next <span class="menu-icon"><i class="fa fa-fw fa-chevron-circle-right"></i></span></a> <a class="btn vd_btn vd_bg-green finish" href="javascript:void(0);"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Finish</a> </div>
	</form>
	</div>
	<!-- panel-body --> 

	</div>
	<!-- Panel Widget --> 

	</div>
	<!-- col-sm-8 -->

	<div class="col-sm-4 sidebar-affix">
	<div class="panel widget vd_summary-panel">
	<div class="panel-heading vd_bg-yellow">
	<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-usd"></i> </span> Summary </h3>
	</div>
	<div class="panel-body-list">
	<form class="form-horizontal" action="#" role="form">
	<div class="content-list menu-action-right" >
	<div data-rel="scroll">
	<ul class="list-wrapper pd-lr-15">
	<li> <span class="product-title"><strong>Datacenter</strong><br/>
	Los Angeles </span>
	<div class="menu-action"> $0 </div>
	</li>
	<li> <span class="product-title"><strong>Processor</strong><br/>
	AMD Athlon II X4 631 Quad-Core </span> 
	<div class="menu-action"> $30 </div>
	</li>
	<li> <span class="product-title"><strong>Hard Drive 1</strong><br/>
	500 GB SATA (7200 RPM)  </span>
	<div class="menu-action"> $30 </div>
	</li>
	<li> <span class="product-title"><strong>Hard Drive 2</strong><br/>
	1 TB SATA (7200 RPM)  </span> 
	<div class="menu-action"> $40 </div>
	</li>
	<li> <span class="product-title"><strong>RAM</strong><br/>
	8 GB DDR3 1333MHZ ECC  </span>
	<div class="menu-action"> $20 </div>
	</li>
	<li> <span class="product-title"><strong>Bandiwidth</strong><br/>
	10 TB Bandwidth  </span> 
	<div class="menu-action"> $20 </div>
	</li>
	<li> <span class="product-title"><strong>Operating System</strong><br/>
	CentOS 6.2 - 64 bit  </span>
	<div class="menu-action"> $0 </div>
	</li>
	<li> <span class="product-title"><strong>Control Panel</strong><br/>
	No Control Panel  </span> 
	<div class="menu-action"> $20 </div>
	</li>
	<li> <span class="product-title"><strong>Backup Services</strong><br/>
	No Backup Services   </span>
	<div class="menu-action"> $20 </div>
	</li>
	<li> <span class="product-title"><strong>Firewall</strong><br/>
	No Firewall </span> 
	<div class="menu-action"> $20 </div>
	</li>        
	<li> <span class="product-title"><strong>Management</strong><br/>
	Extreme Management  </span> 
	<div class="menu-action"> $30 </div>
	</li>                                                 
	</ul>
	</div>
	</div>
	<div style="" class="closing text-right pd-15">
	<h3 class="font-semibold  mgbt-xs-0"> <span class="mgr-10">Total Price: </span><span>$ 250</span><br/><span class="font-normal font-xs">per month</span> </h3>
	</div>
	</form>
	</div>
	</div>
	<!-- Panel Widget --> 
	</div>
	<!-- col-sm-8 --> 
	</div>
	<!-- row --> 

	</div>
	<!-- .vd_content-section --> 

</div>
<!-- .vd_content --> 
