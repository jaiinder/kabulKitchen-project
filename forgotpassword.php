<?php
include 'config.php';
dbConnect("club_db");
?>
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
		<div id="forgot">
			<div id="login-form">
				<?php
				if(isset($_REQUEST['email']))
				{
					$query="select count(*) from user where user_email='".$_REQUEST['email']."'";
					$result=mysql_query($query);
					$count=mysql_num_rows($result);
					if($count=='0')
					{
						header('Location:forgotpassword.php?error=true');
					}
					else
					{
						$newpass = substr(md5(time()),0,8);
						$pwdhash = md5($newpass);
						$query="update user set user_pwd='".$pwdhash."' where user_email='".$_REQUEST['email']."'";
						$result=mysql_query($query);
						
						$message="						
						Dear Sir/Madam,<br/>
						<br/>
						As per your request for re-setting the Password for your account, we wish to inform you that the same has been reset.<br/>
						<br/>						
						Please make note of your new web password: ".$newpass."<br/>
						(The Password is Case Sensitive).<br/>
						<br/>
						You may anytime change your password as follows:<br/>
						<br/>
						Login to account >  Change Password<br/>
						<br/>
						Thanking you.<br/>
						<br/>
						Regards,<br/>
						Customer Care<br/>
						Click Informatics";
						
						$to       = $_REQUEST['email'];
						$subject  = 'Forgot Password request processed - Click Informatics';
						$headers  = 'From: info@clickinformatics.com' . "\r\n" .
									'Reply-To: info@clickinformatics.com' . "\r\n" .
									'MIME-Version: 1.0' . "\r\n" .
									'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
									'X-Mailer: PHP/' . phpversion();
						if(mail($to, $subject, $message, $headers))
							echo "<br/>Your Password has been reset and sent to your Email ID.<br/><br/><a href='index.php'>Proceed to Login</a>";
						else
							echo "Email sending failed";


					}
				}
				else
				{
				?>
				<form name="forgotpassword" action="forgotpassword.php" method="post">
				<table width="70%" cellspacing="15">
				<tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
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
					$margin=140;
				}	
				?>
				<tr><td colspan="2" align="right"><input type="submit" value="Reset Password" style="padding:5px 5px;" /></td></tr>
				</table>
				</form>
				<p align="right" style="margin-top:<?php echo $margin; ?>px;">&copy; Copyright 2013 | <a href="http://www.clickinformatics.com" target="_blank" style="color:#116ac6;">Click Informatics</a></p>
				<?php } ?>
			</div>
		</div>	 
   </div>
   <!-- End Wrapper -->
   
</body>
</html>
