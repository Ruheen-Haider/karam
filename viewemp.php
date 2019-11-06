<?php
include("connection.php");
$query="select * from tbl_employee";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/viewemp.css" rel="stylesheet" type="text/css"/>
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
<div id="h1">ViewEmployee
</div>
</div>


<div id="div1">
<table border="1px solid" cellpadding="20px" cellspacing="10px" id="tbl">
<tr>
<th>S.NO</th>
<th>NAME</th>
<th>F'NAME</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>SALARY</th>
<th>DATE</th>
<th>STATUS</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
<?php
$b=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
<td><?php echo $b;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['salary'];?></td>
<td><?php echo $row['date'];?></td>
<td><a href="status.php?id=<?php echo $row['0'];?>"><?php echo $row['status'];?></a></td>
<td><a href="edit.php?id=<?php echo $row['0'];?>">edit</a></td>
<td><a href="delete.php?id=<?php echo $row['0'];?>">delete</a></td>
</tr>
<?php
$b++;
}
?>
</table>
</div>
</div>
</form>
</body>
</html>