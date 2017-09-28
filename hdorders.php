<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<div class="container" style="padding:0px 0px;">
	<div id="about">
		
	<h2>Home Delivery Orders </h2>
	
	<table width="100%" cellpadding="5" style="margin-top:10px;">
	
	<tr style="background:#fed136; color:#000;">
		<td>Booking Id</td>		
		<td>Name</td>
		<td>Email</td>
		<td>Contact Number</td>
		<td>Address</td>
		<td>Date/Time</td>		
		<td>View</td>
	</tr>
	
	<?php
	$query1="select * from hd order by hd_addon desc";
	$result=db_query($query1);
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<tr>
		<td>#<?php echo $row['hd_id']; ?></td>
		<td><?php echo $row['hd_name']; ?></td>
		<td><?php echo $row['hd_email']; ?></td>
		<td><?php echo $row['hd_phone']; ?></td>
		<td><?php echo $row['hd_add']; ?></td>
		<td><?php echo $row['hd_addon']; ?></td>
		<td><a href='hdorder_view.php?id=<?php echo $row['hd_id']; ?>' style='color:green;'>View</a></td>		
	</tr>
	<?php
	}
	?>
	</table>
	
	</div>
	</div>
	
	<?php footer(); ?>

</body>

</html>



