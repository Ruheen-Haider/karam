<?php
include("connection.php");
$query="select * from tbl_employee";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/team.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form>
<div id="outer">

<div class="dropdown">
      <button class="dropbtn">--Jump To--</button>
		<div class="dropdown-content">
		<a href="admin.php">Dashboard</a>
		<a href="addemp.php">Add User</a>
		<a href="viewemp.php">View User</a>
		<a href="aboutus.php">About Us</a>
		<a href="adddept.php">Add Department</a>
		<a href="salary.php">Salary</a>
		<a href="leavemgnt.php">Leave Management</a>
		<a href="changepass.php">Change Password</a>
		</div>
	</div>

<div id="one">
<div id="dash"></div>
<div id="h1">TeamMembers
</div>
</div>


<div id="three">
<div id="a1">
<div id="a11">
<div id="img1"></div><div class="image-text">
Name:AYUSH SRIVASTAVA(Project HEAD)<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:SRM UNIVERSITY<br/>
Mobile:7607794393<br/>
Department:UI DEVELOPMENT
</div></div>

<div id="a12">
<div id="img2"></div><div class="image-text">
Name:RUHIN HAIDER(Project MEMBER)<br/>
Project: KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/343<br/>
College:B.I.E.T LKO<br/>
Mobile:8840177546<br/>
Department:HR
</div></div>
<div id="a13">
<div id="img3"></div><div class="image-text">
Name:YOGESH BAGHEL(Project MEMBER)<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/344<br/>
College:B.I.E.T LKO<br/>
Mobile:8011456011<br/>
Department:MARKETING</div></div>
</div>


<div id="b1">
<div id="b11">
<div id="img4"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:TRADING
</div></div>

<div id="b12">
<div id="img5"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:MARKETING
</div></div>

<div id="b13">
<div id="img6"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:TRADING
</div></div>
</div>

<div id="c1">
<div id="c11">
<div id="img7"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:HR
</div></div>
<div id="c12">
<div id="img8"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:MARKETING
</div></div>
<div id="c13">
<div id="img9"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:MARKETING
</div></div>
</div>
<div id="d1">
<div id="d11">
<div id="img10"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:HR
</div></div>
<div id="d12">
<div id="img11"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:TRADING
</div></div>
<div id="d13">
<div id="img12"></div><div class="image-text">
Name:<br/>
Project:KARAM HRMS<br/>
Softpro Id:SPI/ST/2018/<br/>
College:<br/>
Mobile:<br/>
Department:MARKETING
</div></div>
</div>
</div>
</div>
</form>
</body>
</html>