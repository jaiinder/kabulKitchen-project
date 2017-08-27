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
				<span style="font-size:22px;">Update Table</span>
			</div>
		</div>
		
		<?php
		if(isset($_REQUEST['submit']))
		{				
				if(isset($_FILES['timg']) && $_FILES['timg']['name']!='')
				{
			
					$nname=rand(1000,9999).$_FILES['timg']['name'];
					move_uploaded_file($_FILES['timg']['tmp_name'],"table_img/".$nname);
					$query="update tables set tb_name='".$_REQUEST['tname']."',tb_person='".$_REQUEST['prsn']."',tb_img='".$nname."' where tb_id='".$_REQUEST['id']."'";
					 //echo $query;
					$result=db_query($query);
				}
				else
				{
				 $query="update tables set tb_name='".$_REQUEST['tname']."',tb_person='".$_REQUEST['prsn']."' where tb_id='".$_REQUEST['id']."'";
				 //echo $query;
		         $result=db_query($query);
				}
		         echo "<br>","Table Updated.";
				
				
				?>
				<!--<meta http-equiv="refresh" content="1,addtables.php" />-->
				<?php
			
		}
		else
		{
		?>
		
		<form action="" name="addtable" id="addtable" method="post" enctype="multipart/form-data">
			<table cellspacing="10">
			<?php
				$q="select *from tables where tb_id='".$_REQUEST['id']."'";
				 //echo $q;
		         $result=db_query($q);
				 while($row=mysqli_fetch_assoc($result))
				 {
					 
			?>
				
				<tr><td>Table Name</td><td>:</td><td><input type="text" name="tname" value="<?php echo $row['tb_name']; ?>" id="pname" class="required textbox" style="width:300px;"></td></tr>
				
				<tr><td>No. of Person</td><td>:</td><td><input type="text" value="<?php echo $row['tb_person']; ?>" name="prsn" class="required textbox"/></td></tr>
				<tr><td>Choose File</td><td>:</td><td><input type="file"  name="timg" /></td></tr>
				<tr>	
				
					<td colspan="2">
						<img src="table_img/<?php echo $row['tb_img'];?>" style="max-width:100px; max-height:100px;"/>
					</td>
				</tr>
		        <tr>
				<td colspan="3">
				<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
				<input type="submit" name="submit" value="Submit" class="button" >
				</td>
				</tr>
				
			<?php
				}
			?>
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
