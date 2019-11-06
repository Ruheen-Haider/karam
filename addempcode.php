<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$email=$_POST['email'];
//echo $email;
$pass=$_POST['pass'];
//echo $pass;
$dept=$_POST['dept'];
//echo $dept;
$gender=$_POST['a'];
//echo $gender;
$salary=$_POST['salary'];
//echo $salary;
include("connection.php");
$query="insert into tbl_employee
(name,fname,email,password,dept_id,salary,gender,status,date) values('$name','$fname','$email','$pass','$dept','$salary','$gender','n',curdate())";
mysql_query($query);
header("Location:admin.php");

?>