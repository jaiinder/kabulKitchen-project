<?php
function user_name($id)
{
	$query="select user_name from user where user_id='".$id."'";
	$result=db_query($query);
	$row=mysqli_fetch_assoc($result);
	echo $row['user_name'];
}
function fileext($fname)
{
	$pos=strpos($fname,".");
	$len=strlen($fname);
	$ext=substr($fname,$pos+1,$len-$pos);
	$ext=strtolower($ext);
	return $ext;
}

function var_count($id)

{

	$query="select count(*) from ecom_pvar where pva_proid='".$id."'";
	$result=db_query($query);
	$row=mysqli_fetch_assoc($result);
	echo $row['count(*)'];

}

function pro_det($id,$field)
{
	$query="select $field from ecom_pro where pro_id='".$id."'";
	$result=db_query($query);
	$row1=mysqli_fetch_assoc($result);
	return $row1[$field];
}

function pva_det($id,$field)
{
	$query="select $field from ecom_pvar where pva_id='".$id."'";
	$result=db_query($query);
	$row1=mysqli_fetch_assoc($result);
	return $row1[$field];
}
?>