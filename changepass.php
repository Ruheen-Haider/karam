<?php

error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
echo "old password and new password never same!!";
if($msg==2)
{
	echo "New Password and Confirm Password Must Be Same!!";
}

if($msg==4)
{
	echo "OLD PASSWORD Must Be CORRECT!!";
}

?>
<html>
<head>
<link href="css/changepass.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action="changepasscode.php" method="post">
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
<div id="h1">ChangePassword
</div>
</div>


<div id="outer1">
<table>
<h1 style="margin-top:80px;text-align:center">CHANGE PASSWORD</h1>
<tr>
<td>
OLD PASSWORD
</td>
<td>
<input type="password" name="op"/>
</td>
</tr>
<tr><td>
NEW PASSWORD</td><td>
<input type="password" name="np"/></td></tr>
<tr><td>
CONFIRM PASSWORD</td><td>
<input type="password" name="cnp"/></td></tr>
<tr><td>
<input type="submit" value="change" style="height:30px;width:60px;margin-top:20px"/></td></tr>

</table>
</div>
</div>
</form>
</body>
</html>