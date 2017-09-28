<?php include("config.php"); ?>

        <meta charset="UTF-8">
        <title>Kabul Kitchen</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">	
		
<style type="text/css">
td
{
	padding:7px;
}
</style>

<script type="text/javascript">
function menuenable()
{
	document.getElementById('menuitems').style.display="block";
}
function menudisable()
{
	document.getElementById('menuitems').style.display="none";
}

</script>	


<?php require('nav.php'); ?>

 <div class="container" style="z-index:99; margin-top:150px;">
	<div class="row">
		<div class="col-sm-12">
			<h1 style="width:100%; border:none; text-align:center;">Reserve a Table</h1>
		</div>
	</div>
 </div>
 
 
 <div class="container" style="z-index:99; padding-top:50px;">
	<div class="row">	
		
		
		<?php		
		
		$date1=date('Y-m-d');
		$date1=strtotime($date1);
		$date2=strtotime("+7 day", $date1);		
		
		$arr1 = array();
		for ($i=$date1; $i<=$date2; $i+=86400)
		{
			array_push($arr1,date("Y-m-d", $i));  
		}
		
		?>
		
		
		
		
		
		<div class="col-sm-5">
		<?php
						if(isset($_REQUEST['submit']))
						{
							$query="insert into booking(bk_tbid,bk_date,bk_slot,bk_name,bk_email,bk_phone,bk_addon,bk_menu) values ('".$_REQUEST['id']."','".$_REQUEST['res_date']."','".$_REQUEST['tm_slot']."','".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['number']."',now(),'".$_REQUEST['menu']."')";
							if($result=db_query($query))
							{
							
							$q10="select * from booking order by bk_addon desc limit 1";
							$r10=db_query($q10);
							$ro10=mysqli_fetch_assoc($r10);
							
							//var_dump($_REQUEST);
							
							$q20="select * from menu";
							$r20=db_query($q20);
							while($ro20=mysqli_fetch_assoc($r20))
							{
								if($_REQUEST['menu'.$ro20['menu_id']]!='0')
								{
									$q30="insert into book_menu (bm_bkid,bm_itemid,bm_name,bm_category,bm_price,bm_qty,bm_addon) values ('".$ro10['bk_id']."','".$ro20['menu_id']."','".$ro20['menu_name']."','".$ro20['cat_name']."','".$ro20['menu_price']."','".$_REQUEST['menu'.$ro20['menu_id']]."',now())";
									$r30=db_query($q30);
								}
							}						
							
							
							?>
							<div class="alert alert-success">
							  <strong>Booking Successful!</strong>
							</div>
							<?php
							}
							else
							{
							?>
							<div class="alert alert-danger">
							  <strong>Some Internal Error Occured!</strong>
							</div>
							<?php
							}
	}
	else
	{
	?>
					 	
			<form action="reserve.php" method="post">
				<input type="text" name="name" required class="form" placeholder="First Name" />
				<input type="email" name="email" required class="form" placeholder="Email" />
				<input type="number" name="number" required class="form" placeholder="Phone Number" />				
				<input type="date" name="res_date" required class="form" placeholder="Reservation Date" style="line-height:100%;" min="<?php echo date('Y-m-d'); ?>" max="<?php echo $date2; ?>" />

			  
				<select class="form" name="tm_slot">
					<option value="">Select Time Slot</option>
					<option value="1">6 PM to 8 PM</option>
					<option value="2">8 PM to 10 PM</option>
				</select>
				
				Do you want to select menu?
								
				<input type="radio" name="menu" value="Yes" checked="checked" onclick="menuenable();"><label for="Yes"> Yes</label> 
				<input type="radio" name="menu" value="No" onclick="menudisable();"><label for="No"> No</label>
				
				
			<img src="images/color.jpg" width="100" />
		</div>
		<div class="col-sm-5">
			
					<h3 style="margin-top:0px;">Table Details</h3>
					
					<div style="border:1px solid #ccc; padding:10px; width:90%;">
					<table>													
					<?php
						
					$q="select * from tables where tb_id='".$_REQUEST['id']."'";
					//echo $q;
					$res=db_query($q);
					$row=mysqli_fetch_assoc($res);
					?>
					
					<tr>
						<td><img src="admin/table_img/<?php echo $row['tb_img']; ?>" style="max-width:200px;"/></td>
						<td style="padding:10px;" valign="top">
							<strong>Table Name:</strong><br/><?php echo $row['tb_name']; ?><br/><br/>
							<strong>Table for Person(s):</strong><br/><?php echo $row['tb_person']; ?>
						</td>
					</tr>				
													
					</table>
					</div>
					
					<h3 style="text-align:left;">Next 7 Days Availability Calendar</h3>
					
					<?php
				
				$count=0;
				for($i=0;$i<7;$i++)
				{
					$date=$arr1[$i];
					$date;
					
					$q1="select * from booking where (bk_tbid='".$_REQUEST['id']."' and bk_slot='1' and bk_date='".$date."')";					
					$res1=db_query($q1);
					
					if(mysqli_num_rows($res1)>0)
					{
						$slot1=0;
					}
					else
					{
						$slot1=1;
					}
					
					$q1="select * from booking where (bk_tbid='".$_REQUEST['id']."' and bk_slot='2' and bk_date='".$date."')";					
					$res1=db_query($q1);
					
					if(mysqli_num_rows($res1)>0)
					{
						$slot2=0;
					}
					else
					{
						$slot2=1;
					}
					
				?>
					<div class="col-sm-3" style="font-size:14px; text-align:center; margin:10px; padding:5px; background:#cbcbcb; color:#000;">
						
						<strong><?php echo $date; ?></strong><br/>
						
						<div style="width:100%; margin-top:5px;<?php if($slot1==1) { echo "background:#0d8700;"; } else { echo "background:#cf0000;"; } ?>; padding:3px 0px; color:#fff;">
						6 PM to 8 PM
						</div>
						<div style="width:100%;<?php if($slot2==1) { echo "background:#0d8700;"; } else { echo "background:#cf0000;"; } ?>; padding:3px 0px; color:#fff;">
						8 PM to 10 PM
						</div>
					</div>
				<?php	
					
				}		
			?>
		
		</div>
	</div>
	
	<div class="row">
		<div class="menu">
		
	
	<div class="col-sm-12" id="menuitems" style="background:#d2eafc;">	
			
	<div class="col-sm-12">
	<h2 align="center" style="margin:15px 0px;">Menu Selection</h2>
			<div style="margin-top: 15px;">
			
			<?php
			$query="select * from category ";
			$result=db_query($query);
			while($row=mysqli_fetch_assoc($result))
			{
			?>			
			<div id="cat<?php echo $row['cat_id']; ?>">
			<table width="100%" style="font-size:14px; margin-bottom:10px;" border="1">					
			<tr>
				<td colspan="4"><h3><?php echo $row['cat_name'];?></h3> </td>				
			</tr>
			<?php
				$q10="select * from menu where cat_name='".$row['cat_id']."'";
				$r10=db_query($q10);
				while($ro10=mysqli_fetch_assoc($r10))
				{
				?>
				<tr>
					<td width="30%"><?php echo $ro10['menu_name'];?></td>
					<td width="50%"><?php echo $ro10['menu_desc'];?></td>
					<td width="10%">$ <?php echo $ro10['menu_price'];?></td>
					<td width="10%"> 
					<select name="menu<?php echo $ro10['menu_id'];?>">
					<?php
					for($i=0;$i<=10;$i++)
					{
					?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php
					}
					?>
					</select>
					</td>
				</tr>
				<?php }
			?>
			</table>
			</div>
			<?php } ?>	
				
			</div>
			</div>
			
			<?php
		}
	?>			
			
	</div>
	</div>
	
	
</div>

<?php
if(isset($_REQUEST['submit']))
{

}
else
{
?>
<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
<input type="submit" value="Book Now" name="submit" class="form" style="margin-top:20px; background:#00c713; color:#fff; font-size:20px;"/>
</form>	
<?php } ?>