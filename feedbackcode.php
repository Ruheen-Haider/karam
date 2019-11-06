<?php
session_start();
$txt=$_POST['txt'];
//echo $txt;
$email=$_SESSION['employee'];
include("connection.php");
$query="select employee_id from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$eid=$row['employee_id'];
}
$query2="insert into tbl_feedback(employee_id,feedback,date) values('$eid','$txt',curdate())";
mysql_query($query2);
header("Location:feedback.php");
?>
