<?php
session_start();
$user=$_POST['a'];
//echo $user;
$email=$_POST['email'];
//echo $email;
$pass=$_POST['pass'];
//echo $pass;
include("connection.php");
if($user=='admin')
{
$query="select * from tbl_admin where email='$email' and password='$pass'";
//echo $query1;
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['check']=$email;
header("Location:admin.php");
}
else
{
	header("Location:index.php");
}

}
if($user=='employee')
{
$query2="select * from tbl_employee where email='$email' and password='$pass'";
$res1=mysql_query($query2);
if($row2=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$_SESSION['employee']=$email;
header("Location:empdashboard.php");
}
else
{
	header("Location:index.php");
}
}

?>