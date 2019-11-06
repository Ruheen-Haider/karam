<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="select status from tbl_employee where employee_id='$id'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res))
{
	$r=$row['status'];
	if($r=='n')
	{
		$query1="update tbl_employee set status='y' where employee_id='$id'";
		mysql_query($query1);
	}
	if($r=='y')
	{
		$query2="update tbl_employee set status='n' where employee_id='$id'";
		mysql_query($query2);
	}
}
header("Location:viewemp.php");
?>
