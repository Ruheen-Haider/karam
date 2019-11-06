<?php
$eid=$_REQUEST['eid'];
//echo $eid;
include("connection.php");
$query="select * from tbl_employee where employee_id='$eid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>

<link href="css/empedit.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<form action="update.php" method="post">

<div id="outer">

<div class="dropdown">
      <button class="dropbtn">--Jump To--</button>
		<div class="dropdown-content">
		<a href="profile.php">viewprofile</a>
		<a href="disscussion.php">disscussion</a>
		<a href="empchngepass.php">change password</a>
		<a href="logout.php">logout</a>
		<a href="askleave.php">ask leave</a>
		<a href="feedback.php">feedback</a>
		</div>
	</div>

<div id="one">
<div id="dash"></div>
<div id="h1">EDIT
</div>
</div>

<div id="a1">
<input type="hidden" name="id" value="<?php echo $row['employee_id']; ?>"/><br/>
Name
<input type="text" name="name" value="<?php echo $row['name']; ?>"/><br/>
F'name
<input type="text" name="fname" value="<?php echo $row['fname']; ?>"/><br/>
Gender 
<input type="radio" name="a" value="male" 
value="<?php 
if($row['gender']=='male')
{
?>
checked
<?php
	
} 
?>"
/>male
<input type="radio" name="a" value="female"
value="<?php 
if($row['gender']=='female')
{
?>
checked
<?php
	
} 
?>"/>female<br/>
Email
<input type="email" name="email" value="<?php echo $row['email']; ?>"/><br/>
Salary
<input type="number" name="salary" value="<?php echo $row['salary']; ?>"/><br/>
date
<input type="date" name="date" value="<?php echo $row['date']; ?>"/><br/>
Department Id
<input type="text" name="dept" value="<?php echo $row['dept_id']; ?>"/><br/>
<input type="submit" value="update"/>

</div>
</div>
</form>
</body>
</html>
<?php
}
?>

