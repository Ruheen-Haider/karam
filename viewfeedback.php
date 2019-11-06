<?php
include("connection.php");
$query="select * from tbl_feedback";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<table>
<tr>
    <th>S.NO</th>
    <th>EMPLOYEE ID</th>
    <th>FEEDBACK</th>
    <th>DATE</th>
 
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
     <td><?php echo $i;?></td>
     <td><?php echo $row['employee_id'];?></td>
     <td><?php echo $row['feedback'];?></td>
     <td><?php echo $row['date'];?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>