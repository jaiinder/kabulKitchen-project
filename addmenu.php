<?php
include_once('config.php');

$conn  = db_connect();
$cate_name = $_POST["dd_name"];
	$sql = "select cate_id from cate where cate_name='$cate_name'";
	$sql_result = $conn -> query($sql);
	if($conn -> query($sql))
	{
	while ($row = $sql_result -> fetch_assoc()){
		
  		$cate_id = $row["cate_id"];
		}
		$conn -> close();
	}
			
else {
	die("error");
}

if(isset($_POST['iname'], $_POST['description'])) 
{
$target = "images/".basename($_FILES['imgt']['name']);
$iname = $_POST['iname'];
$description = $_POST['description'];
$imgt = ($_FILES['imgt']['name']);
$item_price = $_POST['item_price'];
$conn  = db_connect();

$sql = "insert into menu (cate_id, item_name, description, item_img, item_price) VALUES ('$cate_id','$iname','$description','$imgt','$item_price')";
    
move_uploaded_file( $_FILES['imgt']['tmp_name'], $target);
if($conn -> query($sql))
{
	echo "Inserted Successfully";
}
$conn -> close();
}	
else 
{
	die("Input error");
    echo "Not Inserted";
}
?>