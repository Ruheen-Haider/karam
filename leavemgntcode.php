<?php
$email=$_POST['email'];
echo $email;
$reason=$_POST['reason'];
//echo $reason;
$to=$_POST['to'];
//echo $to;
$from=$_POST['from'];
//echo $from;
$month=$_POST['mon'];
//echo $month;
$year=$_POST['year'];
//echo $year;
include("connection.php");
$query="select * from tbl_employee where email='$email'";

$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
	$id=$row['employee_id'];

$query1="insert into tbl_leave(employee_id,reason,to1,email,from1,month,year) values('$id','$reason','$to','$email','$from','$month','$year')";
mysql_query($query1);
header("Location:admin.php");
?>
