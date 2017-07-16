<div class="site-inner">
	<div class="">   
	<!-- Middle Content Start -->

		<div class="vd_content-wrapper">
			<div class="">
				<div class=" clearfix">
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
												 <tr>
													<td>Member Since</td>
													<td class="help-inline"> <?php echo date('M d, Y', strtotime($profile_data['created'])); ?> </td>
													<!-- <td> Jan 07, 2014 </td> -->
												</tr>
											</tbody>
											</table>
										</div>
										<?php if ($user_data->id === $profile_data['id']) { ?>
										<div class="row">
											<div class="col-xs-12"><a class="btn label-danger btn-block" style="color: white" href="<?php echo base_url('index.php/users/logout'); ?>">Log Out</a></div>
										</div>
										<?php } ?>
									</div>
								</div>
								<!-- panel widget -->
							</div>
							<div class="col-sm-9">
								<div class="tabs widget">
									<ul class="nav nav-tabs widget">
										<li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
										<li> <a data-toggle="tab" href="#chombos-tab"> Chombos <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
										<?php if ($user_data->id === $profile_data['id']) { ?>
											<li> <a data-toggle="tab" href="#orders-tab"> Orders <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
										<?php } ?>
										<li> <a data-toggle="tab" href="#friends-tab"> Friends <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
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
												<div class="vd_info tr"><a href="<?php echo base_url('index.php/users/add_chombo'); ?>" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Register New Chombo </a> </div>         
												<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-chain mgr-10 profile-icon"></i> CHOMBOS</h3>        
												<table class="table table-striped table-hover">
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
																<a href="<?php echo base_url('index.php/chombos/view/' . $chombo['id']); ?>">
																	<?php echo $chombo['name']; ?>
																</a></td> 
															<td class="center"><?php echo $chombo['title']; ?></td>
															<td class="center"><?php echo $chombo['access_level']; ?></td>
															<td class="center"><?php echo $chombo['status']; ?></td>
															<td class="center"><?php echo $chombo['owner']; ?></td>
															<td class="menu-action rounded-btn">
																<a href="<?php echo base_url('index.php/chombos/view/' . $chombo['id']); ?>" class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
																		 <i class="fa fa-eye"></i>
																	</a>                                      
																<?php if ($chombo['owner'] == 'You') { ?>
																<a href="<?php echo base_url('index.php/chombos/edit/' . $chombo['id']); ?>" class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
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
															<td colspan="7" class="center">You have not added any chombos yet. Do you want to do it <a class="btn vd_btn">NOW</a></td>
														</tr>
														<?php } ?>	
													</tbody>
												</table>
												<div class="">
												</div>        
											</div>
										</div>
										<!-- chombos-tab -->
										<?php if ($user_data->id === $profile_data['id']) { ?>
										<div id="orders-tab" class="tab-pane">
											<div class="pd-20">        
												<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-calendar mgr-10 profile-icon"></i> ORDERS</h3>        
												<table class="table table-striped table-hover">
													<thead>
														<tr>
															<th>#</th>
															<th>Order #</th>                                  
															<th>Created</th>
															<th>Status</th>
															<th>Actions</th>
														</tr>
													</thead>   
													<tbody>
														<tr>
															<td>1</td>
															<td>ORD3442MD75</td>
															<td>Jul 27, 2017</td>
															<td>Shipped</td>
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
															<td colspan="5" class="center">Sorry, you don't have any orders yet. You can make one easily at the store!</td>
														</tr>
													</tbody>
												</table>
												<div class="">
												</div>        
											</div>
										</div>
										<?php } ?>
										<!-- orders-tab -->
										<div id="friends-tab" class="tab-pane">
											<div class="pd-20">
												<div class="vd_info tr"><a href="<?php echo base_url('index.php/users/add_chombo'); ?>" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add New Friend </a> </div> 
												<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-users mgr-10 profile-icon"></i> FRIENDS</h3>
												<ul class="nav nav-pills">
												  <li class="active"><a href="#photos-1" data-toggle="tab">Friends</a></li>
												  <li><a href="#photos-2" data-toggle="tab">Pending Request</a></li>
												  <li><a href="#photos-3" data-toggle="tab">Blacklisted</a></li>
												</ul>
												<div class="content-grid column-xs-3 column-sm-4 column-md-4 column-lg-6 height-xs-4 mgbt-xs-20">	
												   <div>
														<ul class="list-wrapper">
															<li> <a href="#"> 
																	<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span> 
																 </a>
																<span class="menu-text"> Gabriella Montagna
																	<span class="menu-info">
																		<span class="menu-date">San Diego</span>
																		<span class="menu-action">
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																				<i class="fa fa-check"></i>
																			</span> 
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																				<i class="fa fa-times"></i>
																			</span>
																		</span>
																	</span>
																</span> 
															 </li>
															<li> 
																	<a href="#"> 
																		<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span>  
																	</a>                            
																	<span class="menu-text">  Jonathan Fuzzy
																		<span class="menu-info">
																			<span class="menu-date">Seattle</span>
																			<span class="menu-action">
																				<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																					<i class="fa fa-check"></i>
																				</span> 
																				<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																					<i class="fa fa-times"></i>
																				</span>
																			</span>                                
																		</span>                            
																	</span> 
															 </li>    
															<li> <a href="#"> 
																	<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span> 
																 </a>    
																<span class="menu-text">  Sakura Hinata
																	<span class="menu-info">
																		<span class="menu-date">Hawaii</span>
																		<span class="menu-action">
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																				<i class="fa fa-check"></i>
																			</span> 
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																				<i class="fa fa-times"></i>
																			</span>
																		</span>                                
																	</span>
																</span> 
															</li>                                     
															<li> <a href="#"> 
																	<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span> 
																 </a>    
																<span class="menu-text">  Rikudou Sennin
																	<span class="menu-info">
																		<span class="menu-date">Las Vegas</span>
																		<span class="menu-action">
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																				<i class="fa fa-check"></i>
																			</span> 
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																				<i class="fa fa-times"></i>
																			</span>
																		</span>                                
																	</span>
																</span> 
															</li> 
															<li> <a href="#"> 
																	<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span>  
																 </a>   
																<span class="menu-text">  Kim Kardiosun
																	<span class="menu-info">
																		<span class="menu-date">New York</span>
																		<span class="menu-action">
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																				<i class="fa fa-check"></i>
																			</span> 
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																				<i class="fa fa-times"></i>
																			</span>
																		</span>                                
																	</span>
																</span> 
															 </li>
															<li> <a href="#"> 
																	<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span>
																 </a>    
																<span class="menu-text">   Brad Pita
																	<span class="menu-info">
																		<span class="menu-date">Seattle</span>
																		<span class="menu-action">
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																				<i class="fa fa-check"></i>
																			</span> 
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																				<i class="fa fa-times"></i>
																			</span>
																		</span>                                
																	</span>                             
																</span> 
															</li>                                     
															<li> <a href="#"> 
																	<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span> 
																 </a>   
																<span class="menu-text">  Celline Dior
																	<span class="menu-info">
																		<span class="menu-date">Los Angeles</span>
																		<span class="menu-action">
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																				<i class="fa fa-check"></i>
																			</span> 
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																				<i class="fa fa-times"></i>
																			</span>
																		</span>                                
																	</span>                              
																</span> 
															</li>
															<li>
																<a href="#"> 
																	<span class="menu-icon"><img src="<?php echo base_url($image . 'avatar/placeholder.jpg'); ?>" alt="example image"></span>
																</a>
																<span class="menu-text">  Goerge Bruno Marz
																	<span class="menu-info">
																		<span class="menu-date">Las Vegas</span>
																		<span class="menu-action">
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
																				<i class="fa fa-check"></i>
																			</span> 
																			<span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
																				<i class="fa fa-times"></i>
																			</span>
																		</span>
																	</span>
																</span> 
															</li>
										   				</ul>
													</div>
												</div>
											</div><!-- pd-20 -->  
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