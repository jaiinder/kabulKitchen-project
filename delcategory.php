<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<?php //slider(); ?>	

	<div class="container" style="padding:0px 0px;">

	<div id="about">
	
		<div style="background:#da251d; color:#fff; overflow:auto;">
			<div style="float:left; margin:7px;">
				<span style="font-size:22px;">Delete Category</span>
			</div>
		</div>
		<?php
			  $query="select count(*) from ecom_cat where cat_parent='".$_REQUEST['id']."'";
			  $row=mysqli_fetch_assoc(db_query($query));
			  $query2="select count(*) from ecom_pro where pro_cat='".$_REQUEST['id']."'";
			  $row2=mysqli_fetch_assoc(db_query($query2));
			  if(($row['count(*)']>0)||($row2['count(*)']>0))
			  {
			  echo "<font color='red'>Category is in Use.</font>";
			  ?>		
		      <meta http-equiv="refresh" content="1;categories.php">
			  <?php
			  }
			  else
			  {
		      $query1="delete from ecom_cat where cat_id='".$_REQUEST['id']."'";
		      $result1=db_query($query1);
		      echo "Category Deleted";
		      ?>		
		      <meta http-equiv="refresh" content="1;categories.php">
			  <?php
			  }
			  ?>
		
		
	
	

		

		

	</div>

	</div>

	<?php //footer_bar(); ?>


	<?php //clients(); ?>	
	

	<?php footer(); ?>

</body>

</html>

