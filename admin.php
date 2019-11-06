<?php
session_start();
if($_SESSION['check']=="")
{
	session_destroy();
	header("Location:index.php");
}
?>
<html>
<head>
<link href="css/admin.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="outer">
<div id="outer1">
<div id="dash"></div>
<div id="h1">DASHBOARD
</div>
</div>
<div id="outer2">
<div id="outer21">
<div id="admin">
<b id="adm">ADMIN</b>
<div id="adm1"></div>
</div>

<div id="ad1">
<a href="leavemgnt.php"><b>Leave Management</b></a><br/>
<a href="addemp.php"><b>Add Employee</b></a><br/>
<a href="team.php"><b>About Us</b></a><br/>
<a href="adddept.php"><b>Add Department</b></a><br/>
<a href="viewemp.php"><b>View Employee</b></a><br/>
<a href="lvview.php"><b>Employee leave</b></a><br/>
<a href="salary.php"><b>Salary</b></a><br/>
<a href="changepass.php"><b>Change Password</b></a><br/>
<a href="logout.php"><b>Logout</b></a><br/>
<a href="viewfeedback.php"><b>Feedback</b></a>
</div>
</div>
<div id="outer22">
<div id="outer221">
<div id="a1">
<div id="a11"></div>
<div id="a12"><h2><a href="leavemgnt.php">Leave Management</a></h2></div>
</div>
<div id="a2">
<div id="a21"></div>
<div id="a22"><h2><a href="addemp.php">Add Employee</a></h2></div>
</div>
<div id="a3">
<div id="a31"></div>
<div id="a32"><h2><a href="logout.php">Logout</a></h2></div>
</div>
</div>
<div id="outer222">
<div id="b1">
<div id="b11"></div>
<div id="b12"><h2><a href="changepass.php">Change Password</a></h2></div>
</div>
<div id="b2">
<div id="b21"></div>
<div id="b22"><h2><a href="salary.php">Salary</a></h2></div>
</div>
</div>
<div id="outer223">
<div id="c1">
<div id="c11"></div>
<div id="c12"><h2><a href="viewemp.php">View Employee</a></h2></div>
</div>
<div id="c2">
<div id="c21"></div>
<div id="c22"><h2><a href="adddept.php">Add Department</a></h2></div>
</div>
<div id="c3">
<div id="c31"></div>
<div id="c32"><h2><a href="team.php">About Us</a></h2></div>
</div>
</div>
<div id="outer224">
</div>
</div>
</div>
</div>
</body>
</html>