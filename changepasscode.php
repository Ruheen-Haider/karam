<?php
session_start();
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
$email=$_SESSION['check'];
include("connection.php");
$query="select password from tbl_admin where email='$email'";
$pp=mysql_query($query);
if($row=mysql_fetch_array($pp,MYSQL_BOTH))
{
	if($row['password']==$op)
	{
	  if($op==$np)
	  {
		  header("Location:changepass.php?msg=1");
	  }
	  elseif(!($np==$cnp))
	  {
		  header("Location:changepass.php?msg2");
	  }
	  else
	  {
		$query1="update tbl_admin set password='$np' where email='$email'";		
		mysql_query($query1);
		header("Location:index.php?msg=3");
	  }
	}
	else
	{
		header("Location:changepass.php?msg=4");
	}
}	









?>