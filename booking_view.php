<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<div class="container" style="padding:0px 0px;">
	<div id="about">
	
	<h2><?php //echo $_REQUEST['id'] ?></h2>
			
			<div style="border-top:1px solid #5B2E00;border-bottom:1px solid #5B2E00; overflow:auto; padding:10px 0px;">
			<?php
			$q="select * from booking where bk_id='".$_REQUEST['id']."'";
			$result=db_query($q);
			$row=mysqli_fetch_assoc($result);
			?>
			
			<div style="width:480px; float:left;">
			<h3>Booking Detail:</h3>
			<table>
				<tr><td>Name:</td><td><?php echo $row['bk_name']; ?></td></tr>
				<tr><td>Email:</td><td><?php echo $row['bk_email']; ?></td></tr>
				<tr><td>Mobile:</td><td><?php echo $row['bk_phone']; ?></td></tr>
				
				<!--<tr><td>Payment Status:</td><td><?php //if($row['order_pstatus']=='Paid') { echo "Paid"; } else { echo "Unpaid"; } ?></td></tr>-->
			</table>
			</div>
			
			<div style="width:480px;  float:right;">
				<h3>Table Detail:</h3>
				<table width="100%" style="font-size:16px; line-height:125%;">
					<tr>
						<td>Table Name</td>
						<td>Image</td>
						<td>Person</td>
						
					</tr>
					<?php
					$q10="select * from tables where tb_id='".$_REQUEST['id']."'";
					$r10=db_query($q10);
					$total=0;
					while($row10=mysqli_fetch_assoc($r10))
					{
					?>
						<td><?php echo $row10['tb_name']; ?></td>
						<td>
							<img src="table_img/<?php echo $row10['tb_img']; ?>" style="max-width;50%; max-height:50%;"/>
						</td>
						<td><?php echo $row10['tb_person']; ?></td>
					<?php
					}
					?>
				</table>
			</div>
			
			
			
			</div>
	
	</div>
	</div>
	
	<?php footer(); ?>

</body>

</html>



