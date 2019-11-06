<?php
//include("session.php");
session_start();
if($_SESSION['check']=="")
{
	session_destroy();
	header("Location:index.php");
}
include("connection.php");
$query="select * from tbl_dept";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/addemp.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action="addempcode.php" method="post">
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
<div id="h1">AddEmployee
</div>
</div>
	
<div id="outer1">
<center><h1>ADD EMPLOYEE</h1></center>
<table id="tbl">
<tr>
<td>Name</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>F'name</td>
<td><input type="text" name="fname"/></td>
</tr>
<tr><td>Email</td>
<td><input type="email" name="email"/></td>
</tr>
<tr><td>Password</td>
<td><input type="password" name="pass"/></td>
</tr>



<tr>
<td>Select Department</td>
<td>
<select name="dept">
<option value="">--Select--</option>
<option>HR</option>
<option>Trade</option>
<option>Marketing</option>
<option>R & D</option>
<option></option>
</select>
</td>
</tr>
<tr><td>Gender</td><td>
<input type="radio" name="a" value="male"/>male
<input type="radio" name="a" value="female"/>female</td></tr>
<tr><td>Salary</td><td>
<input type="num" name="salary"/></td></tr>
<tr><td><input type="submit" value="add" style="height:30px;width:60px;margin-top:20px"/></td></tr>

</table>
</div>
</div>
<div id="emp">

</div>
</form>
</body>
</html>