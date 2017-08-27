<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<?php //slider(); ?>	

	<div class="container" style="padding:0px 0px;">

	<div id="about">
	
		<div style="background:#da251d; color:#fff; overflow:auto;">
			<div style="float:left; margin:7px;">
				<span style="font-size:22px;">Change Passsword</span>
			</div>
			
		</div>

			<?php

			if(isset($_REQUEST['oldpwd']))

			{

				$query="select count(*) from user where user_id='".$_SESSION['sid']."' and user_pwd='".md5($_REQUEST['oldpwd'])."'";

				$row=mysqli_fetch_assoc(db_query($query));

				if($row['count(*)']>0)

				{

					$query="update user set user_pwd='".md5($_REQUEST['newpwd'])."' where user_id='".$_SESSION['sid']."'";

					$result=db_query($query);

					echo "Password Updated.";

				}

				else

				{

					echo "Incorrect Password.";

					?>

					<meta http-equiv="refresh" content="2,changepassword.php"> 

					<?php

				}

			}

			else

			{

			?>

			<form name="changepassword" action="changepassword.php" method="post">

			<table cellspacing="10">

			<tr><td>Old Password:</td><td><input type="password" name="oldpwd" class="textbox"></td></tr>

			<tr><td>New Password:</td><td><input type="password" name="newpwd" class="textbox"></td></tr>

			<tr><td>Retype new Password:</td><td><input type="password" name="newpwd" class="textbox"></td></tr>

			<tr><td></td><td><input type="submit" value="Change Password" style="padding:5px;" class="button"></td></tr>

			</table>

	        </form>  

			<?php  } ?>

		

		

	</div>

	</div>

	<!--

	<div class="container" style="border-bottom:1px solid #eee;">

	<div id="banner" style="background:#fed136; width:1100px; margin:0 auto; padding:10px; color:#000; text-align:center; font-style:italic;">

	<p style=" font-size:30px; margin-bottom:10px;">Our team is 100% qualified and registered teaching team,</p>

	<p style="font-size:18px; margin-top:0px;">which is supported in its professional growth and with ongoing professional development opportunities.</p>



	</div>

	</div>	

	-->	

	<?php //footer_bar(); ?>


	<?php //clients(); ?>	
	

	<?php footer(); ?>

</body>

</html>

