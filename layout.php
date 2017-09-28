<?php
session_start();
require('config.php');
include('common.php');

function page_head()
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<title>Admin Panel</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="menu/menu.css" type="text/css" />

</head>
<?php
}

function body_head()
{
?>
	<div class="container" style="background:#282b30; color:#fff;">
	<div id="header">
		<div id="logo"><a href="index.php" style="color:#fff;">Kabul Kitchen</a></div>
		<div id="admission_banner">Welcome <?php user_name($_SESSION['sid']); ?> | <a href="changepassword.php">Change Password</a> | <a href="logout.php">Logout</a></div>
	</div>
	</div>
	
	<div class="container" style=" background:#fed136;">
	<div id="navigation">
		
		   <link rel="stylesheet" href="menu/styles.css">
		   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		   <script src="menu/script.js"></script>
			<div id='cssmenu'>
			<ul>
			   <li><a href='booking.php'><span>Booking Tables</span></a></li>
			   <li><a href='hdorders.php'><span>Home Delivery Orders</span></a></li>
			   <li class='has-sub'><a href='#'><span>Tables</span></a>
				  <ul>
					 <li><a href='addtables.php'><span>Add Table</span></a></li>
					 <li><a href='managetable.php'><span>Manage Tables</span></a></li>
				  </ul>
			   </li>
			   <li ><a href='managecategory.php'>Menu Category</a>
				  
			   </li>
			   <li><a href='managemenu.php'><span>Menu</span></a>
				  
			   </li>
			   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
			</ul>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>

<?php
}

function slider()
{
?>
	<div class="container" style="border-bottom:8px solid #d80313;">
	<div id="slider" >
		<link rel="stylesheet" href="slider/responsiveslides.css" />
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script src="slider/responsiveslides.min.js"></script>
		  <script>
			// You can also use "$(window).load(function() {"
			$(function () {
		
			  // Slideshow 1
			  $("#slider1").responsiveSlides({
				speed: 800
			  });
		
			});
		  </script>
		  
		   <ul class="rslides" id="slider1">
		   	<?php
			for($i=1;$i<=10;$i++)
			{
			?>
				<li><img src="images/slider<?php echo $i; ?>.jpg" alt=""></li>
			<?php
			}
			?>
			</ul>
	
	</div>
	
	</div>
<?php
}

function clients()
{
?>
	<div class="container">
	<div id="about">
		<h2 style="color:#474747; margin-bottom:10px; font-size:20px; border-bottom:2px solid #eeeeee; padding-bottom:10px;">OUR MOST RECENT CLIENTS</h2>
		
		<div id="client_div" style="width:50%; margin-top:10px; border-bottom:1px solid #eee;">
		<img src="images/15.jpg" height="44" style="margin-right:10px;"/>
		<img src="images/client1.png"  style="max-width:100%;" />
		</div>
		
		<div id="client_div" style=" width:50%; margin-top:10px; border-bottom:1px solid #eee;">
		<img src="images/13.jpg" height="44" style="margin-right:10px;"/>
		<img src="images/client2.png"  style="max-width:100%;" />
		</div>
		
		<div id="client_div" style=" width:50%; margin-top:10px; border-bottom:1px solid #eee;">
		<img src="images/14.jpg" height="44" style="margin-right:10px;"/>
		<img src="images/client3.png" style="max-width:100%;" />
		</div>
		
		<div id="client_div" style=" width:50%; margin-top:10px; border-bottom:1px solid #eee;">
		<img src="images/16.jpg" height="44" style="margin-right:10px;"/>
		<img src="images/client4.png"  style="max-width:100%;" />
		</div>
		
		
		
	</div>
	</div>
<?php
}

function footer_bar()
{
?>
	<div class="container" style="padding:0px 0px;">
	<div id="about">
		
		<div id="homepagebox1" style="margin-right:2%;">
			<h3 style="margin:0px; color:#202020;">Activity Calender</h3>
			<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=160&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=escorts900%40gmail.com&ctz=Asia/Calcutta" style="border: 0" width="240" height="260" frameborder="0" scrolling="no"></iframe>
		</div>
		
		<div id="homepagebox1" style="border-left:2px solid #e7e7e7; margin-right:2%;">
			<h3 style="margin:0px; color:#202020;">Quick Links</h3>
			<ul style="list-style-image:url(images/list-img.png); margin-left:-10px;">
				<li><a href="holiday_homework.php" style="color:#000;">Holiday Homework</a></li>
				<li><a href="holiday_list.php" style="color:#000;">List of Holidays</a></li>
				<li><a href="ecircular.php" style="color:#000;">E-Circular/Notice</a></li>
				<li><a href="complaint.php" style="color:#000;">Suggestions or Complaints</a></li>
				
			</ul>
			<br/>
		</div>
		
		<div id="homepagebox1" style="border-left:2px solid #e7e7e7;">
			<h3 style="margin:0px; color:#202020;">Admission Enquiry</h3>
			<form action="admissionenquiry.php" method="post">
			<table cellspacing="10" style="font-size:14px; margin-left:-10px; margin-bottom:10px;">
			<tr><td>Name</td><td><input type="text" name="uname" size="20"></td></tr>
			<tr><td>Admission for Class</td>
				<td>
				<select name="selectclass" id="selectclass" class="dropdown">
					<option value="none" selected="selected">-Select Class-</option>
					<option value="P.G.">P.G.</option>
					<option value="L.K.G.">L.K.G.</option>
					<option value="U.K.G.">U.K.G.</option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
					<option value="6th">6th</option>
					<option value="7th">7th</option>
					<option value="8th">8th</option>
					<option value="9th">9th</option>
				</select>
				</td>
			</tr>		
			<tr><td>Mobile</td><td><input type="text" name="mobile" size="10"></td></tr>
			<tr><td>Email</td><td><input type="text" name="email" size="20"></td></tr>
			<tr><td>Comments/ Inquiry</td><td><textarea name="msg"></textarea></td></tr>
			<tr><td colspan="2"><input type="submit" value="Submit" id="read-more-button" style="background:#666666; color:#fff; border:none"></td></tr>
			</table>
		</form>
			
		</div>
		
	</div>
	</div>
<?php
}

function footer()
{
?>
	<div class="container" style="border-top:8px solid #d80313; background:#24252b; color:#fff; font-size:14px;">
	<div id="footer-bar">
		<div id="sticker">
		
		<!--<img src="images/logo.png" width="50%" style="margin-top:10px;" /><br/>-->
		Copyright &copy; 2017 All Rights Reserved
		
		
		</div>
		<!--
		<div id="sticker" style="color:#fff; ">
		<h2 style="margin-top:0px; margin-bottom:10px; color:#fff; font-size:18px;">Contact Us</h2>

		<p style="margin:0;">
		Escorts World School<br/>
		K-1, Keshavpuram, Near Kakadeo,<br/>
		Kanpur-208017<br/>
		Uttar Pradesh, India<br/><br/>
		Phone: +91-512-2077799, +91-512-6551551<br/>
		Mobile: +91-7753800900<br/>
		E-mail: info@escortsworldschool.com
		</p>
		
		
		</div>
		-->
		<!--
		<div id="sticker1" style="color:#000;">
		
		<iframe width="300" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=26.4883464,80.2684467&hl=es;z=14&amp;output=embed"></iframe></small>
		<div id="map_canvas" style="width:300px; height:220px"></div>
		</div>
		-->
	</div>
	</div>
<?php
}
?>