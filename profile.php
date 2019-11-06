<?php
session_start();
include("connection.php");
$email=$_SESSION['employee'];
//echo $email;
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/empprofile.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form>


<div id="outer">

<div class="dropdown">
      <button class="dropbtn">--Jump To--</button>
		<div class="dropdown-content">
		<a href="viewprofile.php">viewprofile</a>
		<a href="disscussion.php">disscussion</a>
		<a href="chngepass.php">change password</a>
		<a href="logout.php">logout</a>ment</a>
		<a href="askleave.php">ask leave</a>
		<a href="feedback.php">feedback</a>
		</div>
	</div>

<div id="one">
<div id="dash"></div>
<div id="h1">PROFILE
</div>
</div>


<table border="1px" id="tbl">
<tr>
<th>S.NO</th>
<th>NAME</th>
<th>F'NAME</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>SALARY</th>
<th>DATE</th>
<th>DEPARTMENT ID</th>
<th>EDIT</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['salary'];?></td>
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['dept_id'];?></td>
    <td><a href="empedit.php?eid=<?php echo $row['0'];?>">edit</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
</form>
</body>
</html>
