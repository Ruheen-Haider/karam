
<?php
include("connection.php");
$reason=$_POST['reason'];
//echo $reason;
$to1=$_POST['todate'];
//echo $to1;
$from1=$_POST['fromdate'];
//echo $from1;
$month=$_POST['month'];
//echo $month;
$year=$_POST['year'];
//echo $year;

session_start();
if($_SESSION['employee']=="")
{
  session_destroy();
  header("location:index.php?msg=3");
}
error_reporting(0);
extract($_POST);
$email=$_SESSION['employee'];
 $v="select employee_id from tbl_employee where email='$email'";
$res=mysql_query($v);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
  $emp=$row['0'];

$q="insert into tbl_leave (employee_id,reason,to1,from1,month,year,lvstatus) values ('$emp','$reason','$to1','$from1','$month','$year','n')";

  if(mysql_query($q))
   {
 header("Location:leaveemp.php?lv=1");
   }
 else 
 {
   header("Location:leaveemp.php?lv=2");
 }
 ?>
