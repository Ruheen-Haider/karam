<?php
session_start();
if($_SESSION['check']=="")
{
	session_destroy();
	header("Location:index.php");
}
?>
<?php
include("connection.php");
$query="select * from tbl_leave order by leave_id";
$result=mysql_query($query);
?>
<html>
<head>

</head>
<body>
<u><h1>EMPLOYEE LEAVE REQUEST DETAIL</h1></u>
<table style="border:4px solid">
<tr>
<th>S.no</th>
<th>Employee id</th>
<th>Reason</th>
<th>To</th>
<th>From</th>
<th>Month</th>
<th>Year</th>
<th>leave status</th>
<th>edit leave status</th>
</tr>

<?php
$i=1;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
?>
<tr>
    <td><?php echo $i;?></td>
   <td><?php echo $row['employee_id'];?></td>
   <td><?php echo $row['reason'];?></td>
   <td><?php echo $row['to1'];?></td>
   <td><?php echo $row['from1'];?></td>
   <td><?php echo $row['month'];?></td>
   <td><?php echo $row['year'];?></td>
   <td><?php echo $row['lvstatus'];?></td>
   <td><a href="editleave.php?lid=<?php echo $row['0'];?>">edit</td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>