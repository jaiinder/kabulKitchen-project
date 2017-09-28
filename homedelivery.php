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
			<h1 style="width:100%; border:none; text-align:center;">Home Delivery</h1>
		</div>
	</div>
 </div>
 
 
 <div class="container" style="z-index:99; padding-top:50px;">
	<div class="row">	
		<div class="col-sm-12">
		<?php
		if(isset($_REQUEST['submit']))
		{
			$query="insert into hd(hd_name,hd_email,hd_phone,hd_add,hd_addon) values ('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['number']."','".$_REQUEST['add']."',now())";
			if($result=db_query($query))
			{
							
							$q10="select * from hd order by hd_addon desc limit 1";
							$r10=db_query($q10);
							$ro10=mysqli_fetch_assoc($r10);
							
							//var_dump($_REQUEST);
							
							$q20="select * from menu";
							$r20=db_query($q20);
							while($ro20=mysqli_fetch_assoc($r20))
							{
								if($_REQUEST['menu'.$ro20['menu_id']]!='0')
								{
									$q30="insert into hd_menu (bm_bkid,bm_itemid,bm_name,bm_category,bm_price,bm_qty,bm_addon) values ('".$ro10['hd_id']."','".$ro20['menu_id']."','".$ro20['menu_name']."','".$ro20['cat_name']."','".$ro20['menu_price']."','".$_REQUEST['menu'.$ro20['menu_id']]."',now())";
									$r30=db_query($q30);
								}
							}						
							
							
							?>
							<div class="alert alert-success">
							  <strong>Order Placed Successfully!</strong>
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
					 	
			<form action="homedelivery.php" method="post">
				<input type="text" name="name" required class="form" placeholder="First Name" />
				<input type="email" name="email" required class="form" placeholder="Email" />
				<input type="number" name="number" required class="form" placeholder="Phone Number" />				
				<textarea name="add" class="form" style="height:100px;" placeholder="Address"></textarea>
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
<input type="submit" value="Place Order" name="submit" class="form" style="margin-top:20px; background:#00c713; color:#fff; font-size:20px;"/>
</form>	
<?php } ?>