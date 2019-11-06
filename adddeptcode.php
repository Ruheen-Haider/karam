<?php
$dept=$_POST['dept'];
//echo $dept;
include("connection.php");
$query="insert into tbl_dept(dept_name,date) values('$dept',curdate())";
mysql_query($query);
header("Location:adddept.php");
?>