<?php
session_start();
if($_SESSION['check']=="")
{
  session_destroy();
  header("location:index.php");
}

error_reporting(0);
include("connection.php");
extract($_POST);
$query="SELECT * FROM karam.tbl_employee LEFT JOIN karam.tbl_dept ON tbl_employee.dept_id = tbl_dept.dept_id";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
  $sal=$row['salary'];
  $eid=$row['employee_id'];

$query2="select * from tbl_leave where employee_id='$eid'";
$res2=mysql_query($query2);
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
    $to=$row2['to1'];
    $from=$row2['from1'];
    $datediff="SELECT DATEDIFF('$from','$to')";
     
   $resdd=mysql_query($datediff);
   while($rowdd=mysql_fetch_array($resdd,MYSQL_BOTH))
 { 
     $diff=$rowdd[0];
     if($diff>5)
		
  {  
     $salary=$salq-($diff-5)*100;
     $final="insert into sal(employee_id,month,fsalary) values ('$empq','$month','$salary')";
     mysql_query($final);

  }
   } 
}

}

header('Location:salview.php');
 ?>
