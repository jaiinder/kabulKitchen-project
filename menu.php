<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kabul Kitchen Admin</title>
<link rel="stylesheet" type="text/css" href="CSS/style_admin.css">
<script>
function select_content1()
{
	document.getElementById("content").innerHTML = document.getElementById("hide_div1").innerHTML;
}
function select_content2()
{
	document.getElementById("content").innerHTML = document.getElementById("hide_div2").innerHTML;
}
</script>
</head>

<body>
<div id="menu_main">
<div class="menu"><a href="menu.php">Menu</a></div>
<div class="menu"><a href="">Bookings</a></div>
<div class="menu"><a href="">Change Password</a></div>
<div class="menu"><a href="logout.php">Logout</a></div>
</div> 
<br/>
<div id="midlog">
<div id="left_menu">
<div class="menu" onClick="select_content1()"><a>Add new Items</a></div>
<div class="menu" onClick="select_content2()"><a>Edit Menu</a></div>
</div>
<div id="content"></div>
</div>
<div id="hide_div1">
<form method="post" action="addmenu.php" enctype="multipart/form-data">
<table>
<tr><td><br/>Menu Category</td><td><br/>
<?PHP
include_once('config.php');
	$conn  = db_connect();
	$sql = "select cate_name from cate";
	$sql_result = $conn -> query($sql);
	if($conn -> query($sql))
	{
	print "<select id=\"dd\" name=\"dd_name\"> <option>Select One</option>";
	while ($row = $sql_result -> fetch_assoc()){
  		$cate_name = $row["cate_name"];
		print "<option>$cate_name</option>";
		}
print "</select>";

		$conn -> close();
	}
			
else {
	die("error");
}
?>
</td></tr>

<tr><td><br/>Item Name</td><td><br/><input type="text" id="iname" name="iname"></td></tr>
<tr><td><br/>Description</td><td><br/><input type="text" id="description" name="description"></td></tr>
<tr><td><br/>Item Image</td><td><br/><input type="file" id="imgt" name="imgt"></td></tr>
<tr><td><br/>Item Price</td><td><br/><input type="text" id="item_price" name="item_price"></td></tr>
<tr><td colspan="2" align="center"><br/><input type="submit" name="submit"></td></td></tr>
</table>
</form>
</div>
<div id="hide_div2">def</div>
</div>
</body>
</html>
