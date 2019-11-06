<?php
$lvstatus=$_POST['lvstatus'];
//echo $lvstatus;
include("connection.php");
$query="update tbl_leave set lvstatus='$lvstatus'";
mysql_query($query);
header("Location:leavemgnt.php");
session_start();
if($_SESSION['check']=="")
{
   session_destroy();
header("Location:index.php");   
}
?>