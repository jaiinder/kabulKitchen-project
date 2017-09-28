<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<div class="container" style="padding:0px 0px;">
	<div id="about">
		
	<h2>Registrations</h2>
	
	<table width="100%" cellpadding="5" style="margin-top:10px;">
	
	<tr style="background:#fed136; color:#000;">
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Date/Time</td>
		<td>Orders</td>
	</tr>
	
	<?php
	$query="select * from ecom_user order by user_addon desc";
	$result=db_query($query);
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<tr>
		<td>#<?php echo $row['user_id']; ?></td>
		<td><?php echo $row['user_name']; ?></td>
		<td><?php echo $row['user_email']; ?></td>
		<td><?php echo $row['user_addon']; ?></td>
		<td><a href="customer_orders.php?id=<?php echo $row['user_id']; ?>" style="border:1px solid #ccc; padding:4px;">Orders</a></td>
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



