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
		<table width="100%">
		<tr style="font-weight:bold">
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
<form name="login" action="reservation.php" method="post">
<table cellspacing="5" style="width:300px; height:150px; border:1px solid #111; margin:0 auto; margin-top:200px;">
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
		}
	}	
	?>
	<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Login" style="padding:5px 20px;" /></td></tr>	
</table>
</form>
<?php } ?>