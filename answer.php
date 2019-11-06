<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db("karam");
$ans=$_POST['ans'];
//echo $ans;
$qid=$_POST['qid'];
//echo $qid;
$email=$_SESSION['employee'];
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$eid=$row['0'];
}
$query2="insert into tbl_answer(ques_id,employee_id,answer,date) values('$qid','$eid','$ans',curdate())";
mysql_query($query2);
header("Location:disscussion.php");
?>
