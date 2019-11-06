<?php
$id=$_POST['id'];
//echo $id;
$date=$_POST['date'];
//echo $date;
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$dept=$_POST['dept'];
//echo $dept;
$salary=$_POST['salary'];
//echo $salary;
include("connection.php");
$query="update student set name='$name',fname='$fname',gender='$gender',email='$email',dept_id='$dept', where employee_id='$eid'";
mysql_query($query);
header("Location:#");
?>