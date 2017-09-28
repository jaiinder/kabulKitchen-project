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
				<span style="font-size:22px;">Add New Category</span>
			</div>
		</div>
		
		<?php
	if(isset($_REQUEST['submit']))
	{	
		$query="insert into category (cat_name) values ('".$_REQUEST['cat_name']."')";
		
		//echo $query;
		if($result=db_query($query))
		{		
		echo "Category Added.";
		}
		else
		{
			echo "Some Internal Error Occured!";
		}
	}
	else
	{
	?>
		
		<form action="addcategory.php" name="addcategory" id="addcategory" method="post" enctype="multipart/form-data">
			<table cellspacing="10">
			
				
				<tr><td>Menu Category</td><td>:</td><td><input type="text" name="cat_name" id="cat_name" required style="width:300px;"></td></tr>
				
				
								
				<!--<tr><td>Short Description</td><td>:</td><td><textarea name="sdesc" id="sdesc" class="textbox" style="width:300px; height:100px;"></textarea></td></tr>
				<tr><td>Description</td><td>:</td><td><textarea name="ldesc" id="ldesc" class="textbox" style="width:300px; height:100px;"></textarea></td></tr>-->
				
			
		        <tr><td></td><td></td><td><input type="submit" name="submit" value="Submit" class="button" ></td></tr>
			</table>
		</form>
		<!-- Validation Code Start-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			$("#addtale").validate();
			});
		</script>
		<style type="text/css">
		#addtable label.error {
		margin-left: 10px;
		background:url("images/unchecked.gif") no-repeat 0px 0px;
		padding-left: 20px;
		padding-bottom: 2px;
		font-weight: bold;
		color: #EA5200;
		}			
		</style>
		<!-- Validation Code End-->
		
		<?php } ?>
	
	
	</div>

	</div>

	<?php //footer_bar(); ?>


	<?php //clients(); ?>	
	

	<?php footer(); ?>

</body>

</html>