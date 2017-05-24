<div class="site-inner">
<div class="spacer"></div>
	<div class="container">   
	<!-- Middle Content Start -->
		<div>
			Sensors:
			<table>
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

		<div>
			Actuators:
			<table>
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