<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<div class="container" style="padding:0px 0px;">
	<div id="about">
		
	<h2>Booking </h2>
	
	<table width="100%" cellpadding="5" style="margin-top:10px;">
	
	<tr style="background:#fed136; color:#000;">
		<td>Booking Id</td>
		<td>Table</td>
		<td>Date</td>
		<td>Time Slot</td>
		<td>Name</td>
		<td>Email</td>
		<td>Contact Number</td>
		<td>Date/Time</td>
		<td>Menu</td>
		<!--<td>View</td>-->
	</tr>
	
	<?php
	$query1="select * from booking order by bk_id desc";
	$result=db_query($query1);
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	<tr>
		<td>#<?php echo $row['bk_id']; ?></td>
		<td>
		<?php 
		$q100="select * from tables where tb_id='".$row['bk_tbid']."'";
		$r100=db_query($q100);
		$ro100=mysqli_fetch_assoc($r100);
		echo $ro100['tb_name']; 
		?></td>
		<td><?php echo $row['bk_date']; ?></td>
		<td><?php 
		if($row['bk_slot']==1)
		{
			echo "6PM To 8PM";
		}
		else
		{
			echo "8PM To 10PM";
		}
		?></td>
		<td><?php echo $row['bk_name']; ?></td>
		<td><?php echo $row['bk_email']; ?></td>
		<td><?php echo $row['bk_phone']; ?></td>
		<td><?php echo $row['bk_addon']; ?></td>
		<td>
		<?php
		if($row['bk_menu']=='Yes')
		{
			echo "<a href='booking_menu.php?id=".$row['bk_id']."' style='color:green;'>Yes</a>";
		}
		else
		{
			echo "No";
		}
		?>		
		</td>
		
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



