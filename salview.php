<?php
session_start();

error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db("karam");

extract($_POST);
$query="SELECT * FROM karam.tbl_employee LEFT JOIN karam.tbl_salary ON tbl_employee.employee_id=tbl_salary.employee_id";
$res=mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link href="css/salview.css" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div id="outer1">
  
  
  
  <div class="dropdown">
      <button class="dropbtn">--Jump To--</button>
		<div class="dropdown-content">
		<a href="viewprofile.php">viewprofile</a>
		<a href="disscussion.php">disscussion</a>
		<a href="chngepass.php">change password</a>
		<a href="logout.php">logout</a>ment</a>
		<a href="askleave.php">ask leave</a>
		<a href="feedback.php">feedback</a>
		</div>
	</div>

<div id="one">
<div id="dash"></div>
<div id="h1">SALARY
</div>
</div>
  
  
  
  <div id="a1"></div> 
  <div id="a2">
<form>  
    <table align="center" border="1px" id="tbl">
    <tr>
    <th>S No.</th>
    <th>Employee Id</th>
    <th>Final Salary</th>
    <th>Month</th>
    </tr>
    <?php
    $i=1;
    while($row=mysql_fetch_array($res,MYSQL_BOTH))
    {
    ?>
    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['employee_id'];?></td>
    <td><?php echo $row['fsalary'];?></td>
    <td><?php echo $row['month'];?></td>

    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
	</div>
	</div>
	</form>
  </body>
</html>
