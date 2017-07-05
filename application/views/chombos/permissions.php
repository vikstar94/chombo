<div class="site-inner">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- <div class="spacer"></div> -->
	<div class="vd_title-section clearfix">
		<div class="vd_panel-header">
	        <h1>Editing Permissions for Chombo: <span class="font-semibold"><?php echo $chombo_data['name']; ?></h1>
	        <small class="subtitle">Here you can eddit the permissions for the Chombo. If you enable the Public permissions it will be vissible for everyone and you can set a speciffic set of permissions for every type of acces level. Also you can give speciffic permissions for certain users in your friend list.</small>
	    </div>
	</div>
  <div class="vd_content-section clearfix">
	<div class="row">
	  <div class="col-sm-12">
		  <form class="form-horizontal" action="#" role="form">
			  <div class="tabs widget">
			  	<ul class="nav nav-tabs widget">
			  		<li class="active"><a data-toggle="tab" href="#public-tab"> Public <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
			  		<li> <a data-toggle="tab" href="#regular-tab"> Regular <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
			  		<li> <a data-toggle="tab" href="#manager-tab"> Manager <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
			  		<li> <a data-toggle="tab" href="#configurator-tab"> Configurator <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
			  	</ul>
			  	<div class="tab-content">
			  		<div id="public-tab" class="tab-pane active">
			  			<div class="pd-20">     
			  				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> PUBLIC </h3>
			  				<div class="row">
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-1" type="checkbox">
			  							<label >Can monitor data charts</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-2" type="checkbox">
			  							<label >Can view the camera</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-3" type="checkbox">
			  							<label >Can see the characteristics</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-4" type="checkbox">
			  							<label >Can move the Chombo</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-5" type="checkbox">
			  							<label >Can activate the watering</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-6" type="checkbox">
			  							<label >Can toggle the lights</label>
			  						</div>
			  					</div>
			  				</div>
			  			</div><!-- pd-20 -->
			  		</div><!-- home-tab -->
			  		<div id="regular-tab" class="tab-pane">
			  			<div class="pd-20">
			  				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> REGULAR </h3>
			  				<div class="row">
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-1" type="checkbox">
			  							<label >Can monitor data charts</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-2" type="checkbox">
			  							<label >Can view the camera</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-3" type="checkbox">
			  							<label >Can see the characteristics</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-4" type="checkbox">
			  							<label >Can move the Chombo</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-5" type="checkbox">
			  							<label >Can activate the watering</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-6" type="checkbox">
			  							<label >Can toggle the lights</label>
			  						</div>
			  					</div>
			  				</div>       
			  			</div>
			  		</div>
			  		<!-- chombos-tab -->
			  		<div id="manager-tab" class="tab-pane">
			  			<div class="pd-20">        
			  				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> MANAGER </h3>
			  				<div class="row">
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-1" type="checkbox">
			  							<label >Can monitor data charts</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-2" type="checkbox">
			  							<label >Can view the camera</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-3" type="checkbox">
			  							<label >Can see the characteristics</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-4" type="checkbox">
			  							<label >Can move the Chombo</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-5" type="checkbox">
			  							<label >Can activate the watering</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-6" type="checkbox">
			  							<label >Can toggle the lights</label>
			  						</div>
			  					</div>
			  				</div>      
			  			</div>
			  		</div>
			  		<!-- orders-tab -->
			  		<div id="configurator-tab" class="tab-pane">
			  			<div class="pd-20">
			  				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> CONFIGURATOR </h3>
			  				<div class="row">
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-1" type="checkbox">
			  							<label >Can monitor data charts</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-2" type="checkbox">
			  							<label >Can view the camera</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-3" type="checkbox">
			  							<label >Can see the characteristics</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-4" type="checkbox">
			  							<label >Can move the Chombo</label>
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-5" type="checkbox">
			  							<label >Can activate the watering</label>
			  						</div>
			  						<div class="checkbox">
			  							<input checked data-toggle="toggle" data-onstyle="success"  data-on="Allowed" data-off="Denied" data-size="small" name="public-6" type="checkbox">
			  							<label >Can toggle the lights</label>
			  						</div>
			  					</div>
			  				</div>
			  			</div><!-- pd-20 -->  
			  		</div> 
			  	</div><!-- tab-content -->
			  </div><!-- tabs-widget -->				  
	  	</form>
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
						<div class="vd_info tr"><a href="#" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Give permissions </a> </div>
						<div class="col-sm-12">
							<div class="row">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>                                  
											<th>Access Level</th>
											<th>Permission Changes</th>
											<th>Actions</th>
										</tr>
									</thead>   
									<tbody>
										<tr>
											<td>1</td>
											<td>Alexander Atanasov</td>
											<td>Configurator</td>
											<td>NO</td>
											<td class="menu-action rounded-btn">
												<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
													<i class="fa fa-eye"></i>
												</a>                                      
												<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
													<i class="fa fa-pencil"></i>
												</a>
												<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
													<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>John Doe</td>
											<td>Regular</td>
											<td>allowed - can view the camera, denied - can see the characteristics</td>
											<td class="menu-action rounded-btn">
												<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
													<i class="fa fa-eye"></i>
												</a>                                      
												<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
													<i class="fa fa-pencil"></i>
												</a>
												<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
													<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td colspan="5" class="center">You didn't give permissions to anyone yet!</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
  </div>
  <!-- .vd_content-section -->

</div>
