<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<div class="container" style="padding:0px 0px;">
	<div id="about">
	
	<h2>Home Delivery Order Details #<?php echo $_REQUEST['id']; ?> </h2>
	
	<?php
	$query="select * from hd where hd_id=".$_REQUEST['id']."";
	$result=db_query($query);
	$row=mysqli_fetch_assoc($result);
	?>
	
	<table width="100%">
	<tr>
		<td><strong>Name:</strong> <?php echo $row['hd_name']; ?></td>
		<td><strong>Email:</strong> <?php echo $row['hd_email']; ?></td>
		<td><strong>Phone:</strong> <?php echo $row['hd_phone']; ?></td>
	</tr>
	
	<tr>
		<td colspan="3"><strong>Address:</strong> <?php echo $row['hd_add']; ?></td>
	</tr>
	</table>
		
		
	<h2>Ordered Item </h2>
		
	<table width="100%">
	<tr style="font-weight:bold">
		<td>Item Id</td>
		<td>Name</td>
		<td>Price</td>
		<td>Quantity</td>
	</tr>
	
	
	<?php
	$query1="select * from hd_menu where bm_bkid=".$_REQUEST['id']."";
	$result=db_query($query1);
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<tr>
		<td>#<?php echo $row['bm_bkid']; ?></td>
		<td><?php echo $row['bm_name']; ?></td>
		<td>$<?php echo $row['bm_price']; ?></td>
		<td><?php echo $row['bm_qty']; ?></td>
	</tr>
	<?php } ?>
		
	</table>
	
	</div>
	</div>
	
	<?php footer(); ?>

</body>

</html>



