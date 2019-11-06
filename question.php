<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db("karam");
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['employee'];
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$eid=$row['0'];
}
$query2="insert into tbl_question(question,employee_id,date) values('$ques','$eid',curdate())";
mysql_query($query2);
header("Location:disscussion.php");
?>