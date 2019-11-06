<?php
include("connection.php");
session_start();
if($_SESSION['employee']=="")
{
  session_destroy();
  header("location:index.php?msg=3");
}
?>

<?php
$email=$_SESSION['employee'];
$query="SELECT * FROM karam.tbl_leave LEFT JOIN karam.tbl_employee ON
tbl_employee.employee_id = tbl_leave.employee_id where email='$email'";
$res=mysql_query($query);

?>


            <p style="color:red;"> WORKSPACE</p>
         
          <div class="content">
            <table border="5" align="center">
            <tr>
            <th>S No.</th>
            <th>Employee Id</th>
			<th>Reason</th>
            <th>To</th>
            <th>From</th>
             <th>Month</th>
            <th>Year</th>            
            <th>Leave Status</th>
			
            </tr>
            <?php
               $i=1;
            while($row=mysql_fetch_array($res,MYSQL_BOTH))
            {
            ?>
            <tr>
            <td><?php echo $i ;//to print S.No?></td>
            <td><?php echo $row['id'];?></td>
            
            <td><?php echo $row['reason'];?></td>
            
            <td><?php echo $row['to1'];?></td>
            <td><?php echo $row['from1'];?></td>
            <td><?php echo $row['month'];?></td>
			<td><?php echo $row['year'];?></td>
			
            <td><?php
            if($row['lvstatus']=='n')
            echo "Denied/Requested";
            else echo "Granted";

            ?></a></td>


            </tr>
            <?php
            $i++;
            }
            ?>
            </table>
            
         
     
  
    
   </body>
</html>
