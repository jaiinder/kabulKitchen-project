<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Website Admin</title>
<link rel="stylesheet" type="text/css" href="index.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

<body>

   <!-- Begin Wrapper -->
   <div id="wrapper">
		<div id="login">
			<div id="login-form">
				<h2 style="margin-bottom:10px;">Kabul Kitchen Administrator</h2>
			
				<form name="login" action="login.php" method="post">
				<table width="70%" cellspacing="15" style="font-size:18px;">
				<tr><td>Username:</td><td><input type="text" name="uname" /></td></tr>
				<tr><td>Password:</td><td><input type="password" name="pwd" /></td></tr>
				<?php
				if(isset($_GET['error']))
				{
					if($_GET['error']=='true')
					{
					?>
					<tr><td colspan="2" align="center" style="color:#D40000;">Incorrect login credentials.</td></tr>					
					<?php
					$margin=42;
					}
				}
				else
				{
					$margin=75;
				}	
				?>
				<tr><td colspan="2" align="right"><input type="submit" value="Login" style="padding:5px 20px;" /></td></tr>
				<tr><td colspan="2" align="right"><a href="forgotpassword.php" style="color:#116ac6;">Forgot Password</a></td></tr>
				</table>
				</form>
				
			</div>
		</div>	 
   </div>
   <!-- End Wrapper -->
   
</body>
</html>
