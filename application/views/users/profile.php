<div class="site-inner">
<div class="spacer"></div>
	<div class="container">   
	<!-- Middle Content Start -->

		<div class="vd_content-wrapper">
			<div class="vd_container">
				<div class="vd_content clearfix">
					<div class="vd_content-section clearfix">
						<div class="row">
							<div class="col-sm-3">
								<div class="panel widget light-widget panel-bd-top">
									<div class="panel-heading no-title"> </div>
									<div class="panel-body">
										<div class="text-center vd_info-parent"> <img alt="example image" src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>"> </div>
										<h2 class="font-semibold mgbt-xs-5"><?php echo $profile_data['first_name'] . ' ' . $profile_data['last_name']; ?></h2>
										<div class="mgtp-20">
										<table class="table table-striped table-hover">
											<tbody>
												<tr>
													<td style="width:60%;">Status</td>
													<?php if ($profile_data['active']) { ?>
														<td><span class="label label-success">Active</span></td>
													<?php } else { ?>
														<td><span class="label label-danger">Inactive</span></td>
													<?php } ?>
												</tr>
											</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- panel widget -->
							</div>
							<div class="col-sm-9">
								<div class="tabs widget">
									<ul class="nav nav-tabs widget">
										<li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
										<li> <a data-toggle="tab" href="#chombos-tab"> Chombos <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
									</ul>
									<div class="tab-content">
										<div id="profile-tab" class="tab-pane active">
											<div class="pd-20">
												<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
												<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
												<div class="row">
													<div class="col-sm-6">
														<div class="row mgbt-xs-0">
															<label class="col-xs-5 control-label">First Name:</label>
															<div class="col-xs-7 controls"><?php echo $profile_data['first_name']; ?></div>
															<!-- col-sm-10 --> 
														</div>
													</div>
													<div class="col-sm-6">
														<div class="row mgbt-xs-0">
															<label class="col-xs-5 control-label">Last Name:</label>
															<div class="col-xs-7 controls"><?php echo $profile_data['last_name']; ?></div>
															<!-- col-sm-10 --> 
														</div>
													</div>
													<div class="col-sm-6">
														<div class="row mgbt-xs-0">
															<label class="col-xs-5 control-label">User Name:</label>
															<div class="col-xs-7 controls"><?php echo $profile_data['username']; ?></div>
															<!-- col-sm-10 --> 
														</div>
													</div>
													<div class="col-sm-6">
														<div class="row mgbt-xs-0">
															<label class="col-xs-5 control-label">Email:</label>
															<div class="col-xs-7 controls"><?php echo $profile_data['email']; ?></div>
															<!-- col-sm-10 --> 
														</div>
													</div>
												</div>
												<hr class="pd-10"  />
											</div><!-- pd-20 -->
										</div><!-- home-tab -->
										<div id="chombos-tab" class="tab-pane">
											<div class="pd-20">
												<div class="vd_info tr"><a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Chombo </a> </div>         
												<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> CHOMBOS</h3>        
												<table class="table table-bordered table-hover">
													<thead>
														<tr>
															<th>#</th>
															<th>Name</th>                                  
															<th>Title</th>
															<th>Access Level</th>
															<th>Status</th>
															<th>Owner</th>                                       
															<th>Actions</th>                                       
														</tr>
													</thead>   
													<tbody>
														<?php if (!empty($profile_data['chombos'])) {
														foreach ($profile_data['chombos'] as $i => $chombo) { ?>
														<tr>
															<td><?php echo ++$i; ?></td>
															<td class="center">
																<a href="<?php echo base_url('chombos/view/' . $chombo['id']); ?>">
																	<?php echo $chombo['name']; ?>
																</a></td> 
															<td class="center"><?php echo $chombo['title']; ?></td>
															<td class="center"><?php echo $chombo['access_level']; ?></td>
															<td class="center"><?php echo $chombo['status']; ?></td>
															<td class="center"><?php echo $chombo['owner']; ?></td>
															<td class="menu-action rounded-btn">
                              	<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                     <i class="fa fa-eye"></i>
                                  </a>                                      
                              	<?php if ($chombo['owner'] == 'You') { ?>
                              	<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                     <i class="fa fa-pencil"></i>
                                  </a>
                                  <?php } ?>
                              	<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                     <i class="fa fa-times"></i>
                                  </a>                 
															</td>
														</tr>
														<?php } // end of foreach
														} else { // no chombos? ?>
														<tr>
															<td colspan="6" class="center">You have not added any chombos yet. Do you want to do it <a class="btn vd_btn">NOW</a></td>
														</tr>
														<?php } ?>	
													</tbody>
												</table>
												<div class="">
												</div>        
											</div>
										</div>
									</div><!-- tab-content -->
								</div><!-- tabs-widget -->
            	</div>
						</div><!-- row --> 
					</div><!-- .vd_content-section --> 
				</div><!-- .vd_content --> 
			</div><!-- .vd_container --> 
		</div><!-- .vd_content-wrapper --> 
<!-- Middle Content End --> 
	</div><!-- .container --> 
</div><!-- .content -->