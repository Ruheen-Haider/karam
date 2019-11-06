<?php
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
<link href="css/adddept.css" type="text/css" rel="stylesheet"/>
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

<div id="one">
<div id="dash"></div>
<div id="h1">AddDepartment
</div>
</div>


<div id="dept">
<h1>Add Department</h1>
<form action="adddeptcode.php" method="post">
Department Name
<input type="text" name="dept"/><br/><br/>
<input type="submit" value="add"/>
</form>
</div>
<center>
<div class="table">
<h2>TABLE</h2>
<table border="1" style="background:rgba(0,0,0,0.2)" id="tbl">
<tr>
<th>S.NO</th>
<th>Department Name</th>
<th>Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_assoc($res))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['dept_name'];?></td>
<td><?php echo $row['date'];?></td>
<td>edit</td>
<td>delete</td>
</tr>
<?php
$a++;
}
?>
</div>
</center>

</body>
</html>