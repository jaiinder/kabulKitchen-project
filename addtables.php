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
				<span style="font-size:22px;">Add New Table</span>
			</div>
		</div>
		
		<?php
		if(isset($_REQUEST['submit']))
		{
			$query="select count(*) from tables where tb_name='".$_REQUEST['tname']."'";
			$result=db_query($query);
			$row=mysqli_fetch_assoc($result);
			if($row['count(*)']>0)
			{
				echo "Table with Same Name Already Exist.";
				?>
				<!--<meta http-equiv="refresh" content="1,addtables.php" />-->
				<?php
			}
			else
			{	
				$nname=rand(1000,9999).$_FILES['timg']['name'];
				move_uploaded_file($_FILES['timg']['tmp_name'],"table_img/".$nname);
				//var_dump($_FILES);
				$query="insert into tables(tb_name,tb_img,tb_person,tb_addon) values ('".$_REQUEST['tname']."','".$nname."','".$_REQUEST['prsn']."',now())";
				//echo $query;
				$result=db_query($query);
				echo "<br>","Table Added!";
				?>
				<!--<meta http-equiv="refresh" content="1,addtables.php" />-->
				<?php
			}
		}
		else
		{
		?>
		
		<form action="addtables.php" name="addtable" id="addtable" method="post" enctype="multipart/form-data">
			<table cellspacing="10">
			
				
				<tr><td>Table Name</td><td>:</td><td><input type="text" name="tname" id="pname" required style="width:300px;"></td></tr>
				
				
								
				<!--<tr><td>Short Description</td><td>:</td><td><textarea name="sdesc" id="sdesc" class="textbox" style="width:300px; height:100px;"></textarea></td></tr>
				<tr><td>Description</td><td>:</td><td><textarea name="ldesc" id="ldesc" class="textbox" style="width:300px; height:100px;"></textarea></td></tr>-->
				<tr><td>Image</td><td>:</td><td><input type="file" name="timg" required/></td></tr>
				<tr><td>No. of Persons </td><td>:</td><td><input type="text" name="prsn" required /></td></tr>
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