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
                            <li><a class="navactive color_animation" href="index.php#top">WELCOME</a></li>
                            <li><a class="color_animation" href="index.php#story">WHY US</a></li>
                            <li><a class="color_animation" href="index.php#pricing">PRICING</a></li>
                            
                    <!--<li><a class="color_animation" href="#beer">BEER</a></li> -->
                            <li><a class="color_animation" href="index.php#bread">BREAD</a></li>
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
			<h1 style="width:100%; border:none; text-align:center;">Reserve a Table</h1>
		</div>
	</div>
 </div>
 
 
 <div class="container" style="z-index:99; padding-top:50px;">
	<div class="row">
	
		<?php		
		if(isset($_REQUEST['submit']))
		{				
			$q10="select count(*) from booking where bk_tbid='".$_REQUEST['id']."' and bk_date='".$_REQUEST['res_date']."' and bk_slot='".$_REQUEST['tm_slot']."'";
			$r10=db_query($q10);
			$ro10=mysqli_fetch_assoc($r10);
			
			if($ro10['count(*)']>0)
			{
				?>
				<div class="alert alert-danger">
				  <strong>Sorry Table Already Booked In Slot <?php echo $_REQUEST['tm_slot'] ?> on Date <?php echo $_REQUEST['res_date'] ?>.</strong>
				</div>
				<?php
			}
			else
			{
						
				$query="insert into booking(bk_tbid,bk_date,bk_slot,bk_name,bk_email,bk_phone,bk_addon) values ('".$_REQUEST['id']."','".$_REQUEST['res_date']."','".$_REQUEST['tm_slot']."','".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['number']."',now())";
				if($result=db_query($query))
				{
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
		}
		?>
		
		
		<?php
					function getDatesFromRange($start, $end, $format = 'Y-m-d') 
						{
							$array = array();
							$interval = new DateInterval('P1D');

							$realEnd = new DateTime($end);
							$realEnd->add($interval);

							$period = new DatePeriod(new DateTime($start), $interval, $realEnd);

							foreach($period as $date) 
							{ 
								$array[] = $date->format($format); 
							}

							return $array;
						}

						$date1=date('Y-m-d');
						$date2=strtotime("+7 day", strtotime($date1));
						$date2=date('Y-m-d',$date2);
						$arr1=getDatesFromRange($date1, $date2);
						//echo implode("<br><br>",$arr1);	
						//echo"<br><br>";
		?>
		
		
		
		
		
		<div class="col-sm-5">
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
				<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
				<input type="submit"  value="Book Now" name="submit" class="form"/>
			</form>
			
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
		
			
	</div>
	
	
</div>