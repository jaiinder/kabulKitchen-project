<?php
$name = $_POST['book_name'];
$rent = $_POST['book_rent'];
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="yachts/yachts_style_frame.css">
</head>

<body id="mid_book">
<div id="mid">
<form action="yachts_booking.php" method="post">
<table><tr><td colspan="2" align="center"><h1>Booking</h1></td></tr>
<tr><td><br>Vehicle Name</td><td><br><input type="text" readonly id="book_name" name="book_name" value="<?php echo htmlentities($name); ?>"></td></tr><br>
<tr><td><br>Rent Per Day</td><td><br><input type="text" readonly id="book_rent" name="book_rent" value="<?php echo htmlentities($rent); ?>"></td></tr><br>
<tr><td><br>Booking City</td><td><br><select id="book_city" name="book_city" >
  <option value="Brisbane">Brisbane</option>
  <option value="Sydney">Sydney</option>
  <option value="Melbourne">Melbourne</option>
</select></td></tr><br>
<tr><td><br>Bookind Date</td><td><br><input type="date" id="book_date" name="book_date"></td></tr><br>
<tr><td><br>Booking Days</td><td><br><input type="text" id="book_days" name="book_days" placeholder="Enter Booking Days"></td></tr><br>
<tr><td colspan="2" align="center"><br><input type="submit" value="Confirm Booking"></td></tr><br>
</table>

</form></div>
</body>
</html>
