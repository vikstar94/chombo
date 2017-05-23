<div>
	<ul>
		<li> First Name: <?php echo $profile_data['first_name'];?> </li>
		<li> Last Name: <?php echo $profile_data['last_name'];?> </li>
		<li> Username: <?php echo $profile_data['username'];?> </li>
		<li> E-mail: <?php echo $profile_data['email'];?></li>
	</ul>
	<div>
		<div>
			Add new chombo: 
			<form action="http://localhost/chombo/index.php/users/add_chombo" method="post">
				<input type="text" name="code"><button>Add</button>
			</form>
		</div>
		Your Chombos:
		<table border="1">
			<tr>
				<th>name</th>
				<th>title</th>
				<th>access_level</th>
				<th>owner</th>
				<th>status</th>
				<th>sensors</th>
				<th>actuators</th>
			</tr>
		</table>
	</div>
</div>