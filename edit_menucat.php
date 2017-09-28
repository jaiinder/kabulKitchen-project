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
		$query="UPDATE `menu` SET `cat_name`='".$_REQUEST['cat_name']."',`menu_name`='".$_REQUEST['menu_name']."',`menu_desc`='".$_REQUEST['menu_desc']."',`menu_price`='".$_REQUEST['menu_price']."' where menu_id='".$_REQUEST['id']."'";
		
		//echo $query;
		if($result=db_query($query))
		{		
		echo "Item Updated.";
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
	$query="select * from menu where menu_id='".$_REQUEST['id']."'";
	$result=db_query($query);
	$row=mysqli_fetch_assoc($result);
	?>
	
	<form name="editmenu" action="edit_menucat.php" method="post">	
	<table cellpadding="5" style="margin-top:10px;">
	<tr>
		<td>Category Name</td>
		<td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>" required></td>

	</tr>
	<tr>
		<td>Item Name</td>
		<td><input type="text" name="menu_name" value="<?php echo $row['menu_name']; ?>" required></td>
	</tr>
	<tr>
		<td>Item Description</td>
		<td><input type="textarea" name="menu_desc" style="width: 300px; height: 150px;" value="<?php echo $row['menu_desc']; ?>" required></td>
	</tr>
	<tr>
		<td>Item Price</td>
		<td><input type="text" name="menu_price"  value="<?php echo $row['menu_price']; ?>" required></td>
	</tr>
	<tr>
		<td colspan="2">
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
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