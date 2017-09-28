<?php require('layout.php'); ?>
<?php include('SimpleImage.php'); ?>
<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<?php //slider(); ?>	

	<div class="container" style="padding:0px 0px;">

	<div id="about">
	
		<div style="background:#da251d; color:#fff; overflow:auto;">
			<div style="float:left; margin:7px;">
				<span style="font-size:22px;">Delete Product Image</span>
			</div>
			<div style="float:right; margin:7px;">
				<table>
				<tr>
					<td></td>
					<td><a href="products.php" style="color:#fff;">Back</a></td>
				</tr>
				</table>
			</div>
		</div>
			<?php
		        $query2="select * from ecom_pimg where pimg_id='".$_REQUEST['id']."'";
			    $result2=db_query($query2);
			    $row2=mysqli_fetch_assoc($result2);
			    $id=$row2['pimg_pid'];
				$fname=$row2['pimg_name'];
			    unlink($pro_img_zoom.$fname.'');
				unlink($pro_img_medium.$fname.'');
				unlink($pro_img_thumbs.$fname.'');
			    			  
			    $query="delete from ecom_pimg where pimg_id='".$_REQUEST['id']."'";
		        $result=db_query($query);
			  
		        echo "Image Deleted";
		      ?>		
		      <meta http-equiv="refresh" content="1;productimages.php?id=<?php echo $id; ?>">
		
		
	
	

		

		

	</div>

	</div>

	<?php //footer_bar(); ?>


	<?php //clients(); ?>	
	

	<?php footer(); ?>

</body>

</html>

