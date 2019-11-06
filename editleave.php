<?php


session_start();
if($_SESSION['check']=="")
{
	session_destroy();
	header("Location:index.php");
}

$lid=$_REQUEST['lid'];
//echo $lid;
include("connection.php");
$query="select * from tbl_leave where leave_id='$lid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>

</head>
<body>
<h1>update leave</h1>
<form action="updateleave.php?id=<?php echo $row['lvstatus'];?>" method="post">
leave status
<input type="text" name="lvstatus" value="<?php echo $row['lvstatus'];?>"/><br/><br/>
<input type="submit" value="update"/>
</form>
</body>
</html>
<?php
}
?>
