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
		<!--<td><a href="booking_view.php?id=<?php //echo $row['bk_id']; ?>" style="border:1px solid #ccc; padding:4px;">View</a></td>-->
		<td>
		<!--<a href="order_status.php?num=<?php //echo $row['order_num']; ?>">-->
		<?php
		/*$q10="select max(os_sid) from ostatus where os_onum='".$row['order_num']."'";
		$r10=db_query($q10);
		$ro10=mysqli_fetch_assoc($r10);
		
		$q11="select * from status where sta_id='".$ro10['max(os_sid)']."'";
		$r11=db_query($q11);
		$ro11=mysqli_fetch_assoc($r11);
		
		echo $ro11['sta_name'];*/
		?>		
		<!--<img src="images/edit-button.png" height="14"></a></td>
		<td>
		<a href="order_discuss.php?num=<?php //echo $row['order_num']; ?>">Discuss<?php
		/*$q100="select count(*) from discuss where dis_onum='".$row['order_num']."' and dis_from='2' and dis_status='0'";
		$r100=db_query($q100);
		$ro100=mysqli_fetch_assoc($r100);
		if($ro100['count(*)']>0)
		{
			echo " <span style='color:#f00;'>(".$ro100['count(*)'].")</span>";
		}
		else
		{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}*/
		?>
		</a>
		</td>-->
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



