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
<?php
$query="select * from category ";
$result=db_query($query);
while($row=mysqli_fetch_assoc($result))
{
?>
function active<?php echo $row['cat_id']; ?>()
{
	<?php
	$q10="select * from category ";
	$r10=db_query($q10);
	while($ro10=mysqli_fetch_assoc($r10))
	{
	if($ro10['cat_id']==$row['cat_id'])
	{
	?>
	document.getElementById('cat<?php echo $ro10['cat_id'] ?>').style.display="block";
	<?php 
	}
	else
	{
	?>
	document.getElementById('cat<?php echo $ro10['cat_id'] ?>').style.display="none";
	<?php 
	}
	} 
	?>
}
<?php }?>
</script>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div>
                 	<button style="float:right; margin-right:10px; color:Red; background-color:white; border-radius:16px; border:1px solid blue; margin-top:-10px; padding:8px; font-family:Tahoma, Geneva, sans-serif; " ><a href="admin/" target="_blank" style=" text-decoration:none;color:Red;"> Admin</a></button>
            </div>
            <div class="container">
            
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php" style="margin-top:27px;">Kabul Kitchen</a>
                        
                    </div>
                   

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="index.php#story">WHY US</a></li>
                            <li><a class="color_animation" href="index.php#pricing">PRICING</a></li>
							<li><a class="color_animation" href="homedelivery.php">HOME DELIVERY</a></li>
                            <li><a class="color_animation" href="menu.php">MENU</a></li>
                            <li><a class="color_animation" href="index.php#featured">FEATURED</a></li>
                            <li><a class="color_animation" href="index.php#reservation">RESERVATION</a></li>
                            <li><a class="color_animation" href="index.php#contact">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
                
            </div><!-- /.container-fluid -->
             			
        </nav>

 <!--
 <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Kabul Kitchen</h2>
                    <h2 class="white second-title">" Best in Brisbane "</h2>
                    <hr>
                </div>
            </div>
 </div>
 -->

 <div class="container" style="z-index:99; margin-top:150px;">
	<div class="row">
		<div class="col-sm-12">
			<h1 style="width:100%; border:none; text-align:center;">Item Menu</h1>
		</div>
	</div>
 </div>
 
 
 <div class="container" style="z-index:99; padding-top:50px;">
	<div class="row">
	
		<div class="col-sm-3">
			<table width="100%" style="font-size:14px;">
			<?php
			$query="select * from category ";
			$result=db_query($query);
			while($row=mysqli_fetch_assoc($result))
			{
			?>			
			<tr>
				<td>
				<a href="#" onclick="active<?php echo $row['cat_id']; ?>();" style="text-decoration:none;">
				<h3><?php echo $row['cat_name'];?></h3> 
				</a>
				</td>
			</tr>
			<?php }?>
			</table>
				
		</div>
		
		<div class="col-sm-9">
			<?php
			$query="select * from category ";
			$result=db_query($query);
			while($row=mysqli_fetch_assoc($result))
			{
			?>			
			<div id="cat<?php echo $row['cat_id']; ?>" style="display:<?php if($row['cat_id']==1) { echo "block"; } else { echo "none;"; } ?>;">
			<table width="100%" style="font-size:14px;" border="1">					
			<tr>
				<td colspan="3"><h3><?php echo $row['cat_name'];?></h3> </td>				
			</tr>
			<?php
				$q10="select * from menu where cat_name='".$row['cat_id']."'";
				$r10=db_query($q10);
				while($ro10=mysqli_fetch_assoc($r10))
				{
				?>
				<tr>
					<td width="30%"><?php echo $ro10['menu_name'];?></td>
					<td width="55%"><?php echo $ro10['menu_desc'];?></td>
					<td width="15%">$ <?php echo $ro10['menu_price'];?></td>
				</tr>
				<?php }
			?>
			</table>
			</div>
			<?php } ?>		
		</div>
 </div>
		
	
	<div class="row">
		
			
	</div>
	
	
</div>