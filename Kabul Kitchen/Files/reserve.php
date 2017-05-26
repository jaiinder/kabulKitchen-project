<?php
require('config.php');

$query="insert into reservation (res_fname,res_lname,res_state,res_date,res_phone,res_guest,res_email,res_subject,res_addon) values ('".$_REQUEST['res_fname']."','".$_REQUEST['res_lname']."','".$_REQUEST['res_state']."','".$_REQUEST['res_date']."','".$_REQUEST['res_phone']."','".$_REQUEST['res_guest']."','".$_REQUEST['res_email']."','".$_REQUEST['res_subject']."',now())";
$result=db_query($query);

$message='
<html>
<body>
<div style="background:#e9dccd; padding:15px; font-size:16px; font-family:Trebuchet MS; ">

<h2>Thank you for your Reservation Request!</h2>

<p>Hello '.$_REQUEST['res_fname'].' '.$_REQUEST['res_lname'].'</p>
<p>We have recieved your reservation request with following details:</p>

<table>
<tr><td>First Name:</td><td>'.$_REQUEST['res_fname'].'</td></tr>
<tr><td>Last Name:</td><td>'.$_REQUEST['res_lname'].'</td></tr>
<tr><td>State:</td><td>'.$_REQUEST['res_state'].'</td></tr>
<tr><td>Date:</td><td>'.$_REQUEST['res_date'].'</td></tr>
<tr><td>Phone:</td><td>'.$_REQUEST['res_phone'].'</td></tr>
<tr><td>No. of Guest:</td><td>'.$_REQUEST['res_guest'].'</td></tr>
<tr><td>Email:</td><td>'.$_REQUEST['res_email'].'</td></tr>
<tr><td>Subject:</td><td>'.$_REQUEST['res_subject'].'</td></tr>
</table>

<p>With Regards,<br/>
Kabul Kitchen Team
</p>
	
</div>
</body>
</html>';

$to = $_REQUEST['res_email'];
$subject = 'Your Reservation Request at Kabul Kitchen';
$headers = "From: noreply@kabulkitchen.com\r\n";
$headers .= "Reply-To: noreply@kabulkitchen.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subject, $message, $headers);
$message='
<html>
<body>
<div style="background:#e9dccd; padding:15px; font-size:16px; font-family:Trebuchet MS; ">

<h2>New Reservation Request at Kabul Kitchen!</h2>

<p>You have recieved a reservation request with following details:</p>

<table>
<tr><td>First Name:</td><td>'.$_REQUEST['res_fname'].'</td></tr>
<tr><td>Last Name:</td><td>'.$_REQUEST['res_lname'].'</td></tr>
<tr><td>State:</td><td>'.$_REQUEST['res_state'].'</td></tr>
<tr><td>Date:</td><td>'.$_REQUEST['res_date'].'</td></tr>
<tr><td>Phone:</td><td>'.$_REQUEST['res_phone'].'</td></tr>
<tr><td>No. of Guest:</td><td>'.$_REQUEST['res_guest'].'</td></tr>
<tr><td>Email:</td><td>'.$_REQUEST['res_email'].'</td></tr>
<tr><td>Subject:</td><td>'.$_REQUEST['res_subject'].'</td></tr>
</table>

<p>With Regards,<br/>
Kabul Kitchen Team
</p>
	
</div>
</body>
</html>';

$to = "keshavonline2000@gmail.com";
$subject = 'New Reservation Request at Kabul Kitchen';
$headers = "From: noreply@kabulkitchen.com\r\n";
$headers .= "Reply-To: noreply@kabulkitchen.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";				
mail($to, $subject, $message, $headers);
header('Location:index.php?res=sucess');
?>