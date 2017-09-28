<!DOCTYPE html>
<html>

    <head>
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
		
    </head>

    <body>
	
		<?php
		if(isset($_REQUEST['res']) && $_REQUEST['res']=='sucess')
		{
		?>
		<script type="text/javascript">
		alert('Thank your for your reservation request! We will get back to you soon.');
		</script>
		<?php
		}
		?>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div>
                 	<button style="float:right; margin-right:10px; color:Red; background-color:white; border-radius:16px; border:1px solid blue; margin-top:-10px; padding:8px; font-family:Tahoma, Geneva, sans-serif; " ><a href="index.php"  style=" text-decoration:none;color:Red;"> Sign-Out</a></button>
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
                        <a class="navbar-brand" href="#" style="margin-top:27px;">Kabul Kitchen</a>
                        
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
<div style="float:left;">
<?php
require('config.php');
?>

<?php
if(isset($_REQUEST['submit']))
{
	$query="select count(*) from user where user_name='".$_REQUEST['uname']."' and user_pwd='".md5($_REQUEST['pwd'])."'";
	$result=db_query($query);
	$row=mysqli_fetch_assoc($result);
	if($row['count(*)']>0)
	{
		?>
		<table  style="margin-top:30px; background-color:green; margin:60px 0px 0px 50px; border:3px solid black; border-spacing: 20px 50px;" width="100%" >
		<tr style="font-weight:bold; border:1px solid black; margin-bottom:5px;">
			<td>First Name</td>
			<td>Last Name</td>
			<td>State</td>
			<td>Date</td>
			<td>Phone</td>
			<td>No of Guest</td>
			<td>Email</td>
			<td>Subject</td>
			<td>Addon</td>			
		</tr>
		<?php
		$query="select * from reservation order by res_addon desc";
		$result=db_query($query);
		while($row=mysqli_fetch_assoc($result))
		{
		?>
		<tr>
			<td><?php echo $row['res_fname']; ?></td>
			<td><?php echo $row['res_lname']; ?></td>
			<td><?php echo $row['res_state']; ?></td>
			<td><?php echo $row['res_date']; ?></td>
			<td><?php echo $row['res_phone']; ?></td>
			<td><?php echo $row['res_guest']; ?></td>
			<td><?php echo $row['res_email']; ?></td>
			<td><?php echo $row['res_subject']; ?></td>
			<td><?php echo $row['res_addon']; ?></td>
		</tr>
		<?php
		}
	}
	else
	{
		header('Location:reservation.php?error=true');
	}
}
else
{
?>
</table>
</div>
<form name="login" action="reservation.php" method="post">
<table cellspacing="5" style="width:300px; height:150px; border:1px solid #111; margin:0 auto; margin-top:200px;">
	<tr><td style="color:black;">Username:</td><td> <input style="color:black;" type="text" name="uname" /></td></tr>
	<tr><td style="color:black;">Password:</td><td><input style="color:black;" type="password" name="pwd" /></td></tr>
	<?php
	if(isset($_GET['error']))
	{
		if($_GET['error']=='true')
		{
		?>
		<tr><td colspan="2" align="center" style="color:#D40000;">Incorrect login credentials.</td></tr>					
		<?php		
		}
	}	
	?>
	<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Login" style="padding:5px 20px; color:black;" /></td></tr>	
</table>
</form>
<?php } ?>