<?php
session_start();
include 'config.php';


$pwd=md5($_REQUEST['pwd']);
$query = "SELECT user_id FROM user WHERE user_name= '".$_REQUEST['uname']."' AND user_pwd = '".$pwd."'";
$result = db_query($query);
$count=mysqli_num_rows($result);
if($count=='0')
{
	header('Location:index.php?error=true');
}
else
{
	$row=mysqli_fetch_assoc($result);
	$_SESSION['sid']=$row['user_id'];
	header('Location:myspace.php');
}
?>