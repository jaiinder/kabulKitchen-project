<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blitz Luxury Rentals</title>
<link rel="stylesheet" type="text/css" href="CSS/Style.css">
<link rel="stylesheet" type="text/css" href="CSS/Style_yachts.css">
<script>
function onClickHandler(){
    location.href = 'cars.html?name=' + document.getElementById('nav_var').value;
}
function click1()
{	
	document.getElementById("nav_var").value= '1';
	onClickHandler();
}
function click2()
{	
	document.getElementById("nav_var").value= '2';
	onClickHandler();
}
function click3()
{	
	document.getElementById("nav_var").value= '3';
	onClickHandler();
}
function click4()
{	
	document.getElementById("nav_var").value= '4';
	onClickHandler();
}
function click5()
{	
	document.getElementById("nav_var").value= '5';
	onClickHandler();
}
</script>
</head>

<body>
<div id="outer_cont">
<header>
<div id="logo"><a href="index.html"></a></div>
<div id="menu_main">
<div class="menu"><a href="index.html">HOME</a></div>
<div class="menu"><a href="#">SERVICES</a></div>
<div class="menu"><a href="#">CONTACT US</a></div>
<div class="menu"><a href="#">ABOUT US</a></div>
</div>
</header>
<div id="mid">
<h1>Luxury Cars <input type="hidden" name="nav_var" id="nav_var"></h1><br>
<div class="y_main"><a href="#"> <input type="image" src="cars/1/main.jpg" width="350" height="149" onClick="click1()" alt="Click to know more"></a></div>
<div class="y_main"><a href="#"><input type="image" src="cars/2/main.jpg" name="30m" width="350" height="149" onClick="click2()" alt="Click to know more"> </a></div>
<div class="y_main"><a href="#"> <input type="image" src="cars/3/main.jpg" width="350" height="149" onClick="click3()" alt="Click to know more"></a></div>
<div class="y_main"><a href="#"> <input type="image" src="cars/4/main.jpg" width="350" height="149" onClick="click4()" alt="Click to know more"></a></div>
<div class="y_main"><a href="#"><input type="image" src="cars/5/main.jpg" width="350" height="149" onClick="click5()" alt="Click to know more"> </a></div>
</div>
<br><br>
<footer>
<a href="#">HOME</a> | <a href="#">SERVICES</a> | <a href="#">CONTACT US</a> | <a href="#">ABOUT US</a> | 
<br><br>
Copyright (c) Blitz Luxury Rentals
</footer>
</body>
</html>
