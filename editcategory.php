<?php require('layout.php'); ?>
<?php include('SimpleImage.php'); ?>
<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<?php //slider(); ?>	

	<div class="container" style="padding:0px 0px;">

	<div id="about">
	
		<div style="background:#da251d; color:#fff; overflow:auto; margin-bottom:10px;">
			<div style="float:left; margin:7px;">
				<span style="font-size:22px;">Edit Category</span>
			</div>
		</div>
		
		<?php
	if(isset($_REQUEST['submit']))
	{	
		$query="update category set cat_name='".$_REQUEST['cat_name']."' where cat_id='".$_REQUEST['id']."'";
		
		//echo $query;
		if($result=db_query($query))
		{		
		echo "Category Updated.";
		}
		else
		{
			echo "Some Internal Error Occured!";
		}
	}
	else
	{
	?>
	
	<?php
	$query="select * from category where cat_id='".$_REQUEST['id']."'";
	$result=db_query($query);
	$row=mysqli_fetch_assoc($result);
	?>
	
	<form name="editcategory" action="editcategory.php" method="post">	
	<table cellpadding="5" style="margin-top:10px;">
	<tr>
		<td>Name</td>
		<td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>" required></td>
	</tr>
	<tr>
		<td colspan="2">
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
		<input type="submit" name="submit" class="button" value="Submit">
		</td>
	</tr>
	</table>
	
	</form>
	<?php } ?>
	
	</div>

	</div>

	<?php //footer_bar(); ?>


	<?php //clients(); ?>	
	

	<?php footer(); ?>

</body>

</html>