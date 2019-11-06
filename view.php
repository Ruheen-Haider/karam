<?php
$qid=$_REQUEST['qid'];
//echo $qid;
mysql_connect('localhost','root','');
mysql_select_db("karam");
$query="select * from tbl_answer where ques_id='$qid'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo $row['answer'];
	echo "<br/>";
}
?>
<html>
<head>
<link href="css/view.css" rel="stylesheet" type="text/css"/>
</head>
<body>
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
</div>
</body>
</html>