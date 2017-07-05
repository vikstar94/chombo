<div class="site-inner">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<div class="vd_title-section clearfix">
		<div class="vd_panel-header">
	        <h1>Editing Chombo: <span class="font-semibold"><?php echo $chombo_data['name']; ?></h1>
	        <small class="subtitle">Here you can edit the Chombo's title and description. Also can enable or disable the Chombo if it is necessary. Bellow you can see some other charactristics and options.</small>
	    </div>
	</div>
<!-- <div class="spacer"></div> -->
  <div class="vd_content-section clearfix">
	<div class="row">
	  <div class="col-sm-12">
		<div class="panel widget light-widget">
		  <div class="panel-heading no-title"> </div>
		  <form class="form-horizontal" action="#" role="form">
			<div  class="panel-body">
			  <h2 class="mgbt-xs-20">General Information</span> </h2>
			  <br/>
			  <div class="row">
				<div class="col-sm-3 mgbt-xs-20">
				  <div class="form-group">
					<div class="col-xs-12">
					  <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="<?php echo base_url($image . 'Chombo.jpg'); ?>"> </div>
					  <div class="form-img-action text-center mgbt-xs-20"> <a class="btn vd_btn vd_bg-green" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload</a></div>
					</div>
				  </div>
				</div>
				<div class="col-sm-9">
				  <div class="form-group">
					<label class="col-sm-3 control-label">Title</label>
					<div class="col-sm-9 controls">
					  <div class="row mgbt-xs-0">
						<div class="col-xs-9">
						  <input type="text"  placeholder="Chombo's Title" value="<?php echo $chombo_data['title']; ?>">
						</div>
						<!-- col-xs-12 -->
						<div class="col-xs-2">
						  <div class="btn-action">
							<button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
							<ul class="dropdown-menu pull-right">
							  <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
							  <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
							  <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
							</ul>
						  </div>
						  <!-- btn-action col-sm-10 --> 
						</div>
					  </div>
					  <!-- row --> 
					</div>
					<!-- col-sm-10 --> 
				  </div>
				  <!-- form-group -->
				  
				  <div class="form-group">
					<label class="col-sm-3 control-label">Description</label>
					<div class="col-sm-9 controls">
					  <div class="row mgbt-xs-0">
						<div class="col-xs-9">
						  <textarea rows="4" name="description" value="<?php echo $chombo_data['description']; ?>"></textarea>
						</div>
						<!-- col-xs-9 -->
						<div class="col-xs-2">
						  <div class="btn-action">
							<button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
							<ul class="dropdown-menu pull-right">
							  <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
							  <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
							  <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
							</ul>
						  </div>
						  <!-- btn-action col-sm-10 --> 
						  
						</div>
					  </div>
					  <!-- row --> 
					</div>
					<!-- col-sm-10 --> 
				  </div>
				  <!-- form-group -->
				  
				  <div class="form-group">
					<label class="col-sm-3 control-label">Active</label>
					<div class="col-sm-9 controls">
					  <div class="row mgbt-xs-0">
						<div class="col-xs-9">
						  <input checked data-toggle="toggle" data-onstyle="success"  data-on="Active" data-off="Inactive" name="active" type="checkbox">
						</div>
						<!-- col-xs-12 --> 
					  </div>
					  <!-- row --> 
					</div>
					<!-- col-sm-10 --> 
				  </div>
				  <!-- form-group -->
				  <div class="pd-20">
				    <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Finish</button>
				  </div>				  
				</div>
				<!-- col-sm-12 --> 
			  </div>
			  <!-- row --> 
			  
			</div>
			<!-- panel-body -->
		  </form>
		</div>
		<!-- Panel Widget --> 
	  </div>
	  <!-- col-sm-12--> 
	</div>
	<!-- row -->

	<div class="row">
		<div class="col-sm-12">
			<div class="panel widget light-widget">
		  		<div class="panel-heading no-title"> </div>
				<div  class="panel-body">
					<h3 class="mgbt-xs-15">Other Information</h3>
					<div class="row">
						<div class="col-sm-9 col-sm-offset-3">
							<div class="row">
								<div class="col-sm-6">
									<div class="row mgbt-xs-0">
										<label class="col-xs-5 control-label">Code:</label>
										<div class="col-xs-7 controls"><?php echo $chombo_data['code']; ?></div>
										<!-- col-sm-10 --> 
									</div>
								</div>
								<div class="col-sm-6">
									<div class="row mgbt-xs-0">
										<label class="col-xs-5 control-label">Redistered on:</label>
										<div class="col-xs-7 controls"><?php echo $chombo_data['created']; ?></div>
										<!-- col-sm-10 --> 
									</div>
								</div>
								<div class="col-sm-6">
									<div class="row mgbt-xs-0">
										<label class="col-xs-5 control-label">Last update:</label>
										<div class="col-xs-7 controls"><?php echo $chombo_data['updated']; ?></div>
										<!-- col-sm-10 --> 
									</div>
								</div>
								<div class="col-sm-6">
									<div class="row mgbt-xs-0">
										<label class="col-xs-5 control-label">Customizatons:</label>
										<div class="col-xs-7 controls"><?php echo $chombo_data['custom']; ?></div>
										<!-- col-sm-10 --> 
									</div>
								</div>
							</div>
							<hr class="pd-10"  />
							<a href="<?php echo base_url('index.php/chombos/permissions/' . $chombo_data['id']); ?>" class="btn vd_btn vd_bg-green">Permissions</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
  </div>
  <!-- .vd_content-section -->

</div>
