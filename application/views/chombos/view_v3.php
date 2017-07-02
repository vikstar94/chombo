<div class="site-inner">
<!-- <div class="spacer"></div> -->
	<div class="vd_content-section">

		<?php /*var_dump($chombo_data); */
			foreach ($chombo_data['sensors'] as $sensor) {
				if (preg_match('/.*\_sensor/', $sensor['name'])) {
					$viewed_sensors[] = $sensor;
				}
			}
		?>

		<div class="row">
			<div class="col-sm-2 nopadding">
				<nav class="nav-sidebar">
					<ul class="nav tabs">
						<?php if(!empty($viewed_sensors)) { ?>
							<li class="active"><a href="#sensors_tab" data-toggle="tab">Sensors</a></li>
						<?php } ?>
						<li class=" <?php echo (!empty($viewed_sensors)) ? '' : 'active'; ?>"><a href="#map_tab" data-toggle="tab">Map</a></li>
						<li class=""><a href="#video_tab" data-toggle="tab">Video</a></li>
						<li class=""><a href="#Characteristics_tab" data-toggle="tab">Characteristics</a></li>
					</ul>
				</nav>
				<!-- Side Nav --> 
			</div>
			<div class="col-sm-10 full-screen panel-bd-top">
				<div class="tab-content">
					<?php if(!empty($viewed_sensors)) { $i = 0;?>
					<div class="tab-pane active text-style vd_content-section" id="sensors_tab">
						<div class="row">
						<h3>SENSORS</h3>
						<?php foreach ($viewed_sensors as $s) { $i++;?>
							<div class="col-md-4 mgbt-xs-20 mgbt-md-0">
								<div class="panel widget light-widget panel-bd">
									<div class="panel-heading no-title">
										<div class="vd_panel-menu">
											<div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
											 <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
												<div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
												<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
													<div class="child-menu">
														<div class="content-list content-menu">
													  		<ul class="list-wrapper pd-lr-10">
																<li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
													  		</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
										</div>
										<!-- vd_panel-menu --> 
									</div>
									<div class="panel-body-list pd-25">
										<h2 class="mgtp--5"> <span class="font-semibold"><?php echo $s['model']; ?></span> </h2>
										<div id="humidity-placeholder-<?php echo $i; ?>" class="line-placeholder" style="height:318px;"></div>
									</div>
								</div>
							</div>
						<?php } // viewed sensors ?>
						</div> <!-- row -->
					</div>
					<?php } // does it have viewed sensors ?>

					.
					<div class="tab-pane text-style vd_content-section <?php echo (!empty($viewed_sensors)) ? '' : 'active'; ?>" id="map_tab">
						<div class="panel widget light-widget">
							<div class="panel-heading no-title">
								<div class="vd_panel-menu">
									<div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
									 <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
											<div class="child-menu">
												<div class="content-list content-menu">
											  		<ul class="list-wrapper pd-lr-10">
														<li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
											  		</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
								</div>
								<!-- vd_panel-menu --> 
							</div>
							<div class="panel-body-list pd-25">
								<h2 class="mgtp--5"> <span class="font-semibold">Position</span></h2>
								<div id="map" style="width:100%;height:500px;background:yellow"></div>
							</div>
						</div>
					</div>
					<div class="tab-pane text-style vd_content-section" id="video_tab">
						<div class="panel widget light-widget">
							<div class="panel-body-list pd-25">
								<img src="<?php echo $base_url . $image . 'photos/camera_view.jpg'; ?>" style="width: 100%">
							</div>
						</div>
					</div>
					<div class="tab-pane text-style vd_content-section" id="Characteristics_tab">
						<div class="panel widget light-widget panel-bd">
							<div class="panel-body-list pd-25">
								<div class="row">
									<div class="panel-body  table-responsive">
										Sensors:
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>                                  
													<th>Model</th>                                       
													<th>Description</th>
													<th>Min. Value</th>
													<th>Max. Value</th>
													<th>Accuracy</th>                                       
												</tr>
											</thead>   
											<tbody>
												<?php foreach ($chombo_data['sensors'] as $i => $sensor) { ?>
												<tr>
													<td class="center"><?php echo $sensor['id']; ?></td>
													<td class="center"><?php echo $sensor['name']; ?></td> 
													<td class="center"><?php echo $sensor['model']; ?></td>
													<td class="center"><?php echo $sensor['description']; ?></td>
													<td class="center"><?php echo $sensor['min_value']; ?></td>
													<td class="center"><?php echo $sensor['max_value']; ?></td>
													<td class="center"><?php echo $sensor['accuracy']; ?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>

								<div class="row">
									<div class="panel-body  table-responsive">
										Actuators:
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>                                  
													<th>Model</th>                                       
													<th>Description</th>
													<th>Min. Value</th>
													<th>Max. Value</th>
													<th>Accuracy</th>                                       
												</tr>
											</thead>   
											<tbody>
												<?php foreach ($chombo_data['actuators'] as $i => $actuator) { ?>
												<tr>
													<td class="center"><?php echo $actuator['id']; ?></td>
													<td class="center"><?php echo $actuator['name']; ?></td> 
													<td class="center"><?php echo $actuator['model']; ?></td>
													<td class="center"><?php echo $actuator['description']; ?></td>
													<td class="center"><?php echo $actuator['min_value']; ?></td>
													<td class="center"><?php echo $actuator['max_value']; ?></td>
													<td class="center"><?php echo $actuator['accuracy']; ?></td>
												</tr>
												<?php } ?>
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



	</div>
</div>
