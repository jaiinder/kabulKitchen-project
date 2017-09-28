<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<div class="container" style="padding:0px 0px;">
	<div id="about">
	
	<h2>Booking Details #<?php echo $_REQUEST['id']; ?> </h2>
	
	<?php
	$query="select * from booking where bk_id=".$_REQUEST['id']."";
	$result=db_query($query);
	$row=mysqli_fetch_assoc($result);
	?>
	
	<table width="100%">
	<tr>
		<td>Name: <?php echo $row['bk_name']; ?></td>
		<td>Email: <?php echo $row['bk_email']; ?></td>
		<td>Phone: <?php echo $row['bk_phone']; ?></td>
	</tr>
	
	<tr>
		<td>Table: <?php 
		$q10="select * from tables where tb_id='".$row['bk_tbid']."'";
		$r10=db_query($q10);
		$ro10=mysqli_fetch_assoc($r10);
		echo $ro10['tb_name']; ?></td>
		<td>Date: <?php echo $row['bk_date']; ?></td>
		<td>Slot: <?php if($row['bk_slot']==1) { echo "6PM To 8PM"; } else { echo "8PM To 10PM";  }  ?></td>
	</tr>
	</table>
		
		
	<h2>Booking Menu Item </h2>
		
	<table width="100%">
	<tr style="font-weight:bold">
		<td>Item Id</td>
		<td>Name</td>
		<td>Price</td>
		<td>Quantity</td>
	</tr>
	
	
	<?php
	$query1="select * from book_menu where bm_bkid=".$_REQUEST['id']."";
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



