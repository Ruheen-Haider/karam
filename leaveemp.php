<?php
session_start();

error_reporting(0);

if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
?>
<?php
$lv=$_REQUEST['lv'];
//echo $lv;
?>
 
      <div class="content">
        <br>

        <table class="lform">
        <tr>

        <td >
          <a  href="lvview.php" ><input style="background-color:red;color:white" type="submit" name="submit" value="Click here to view your all leaves"></a>
        </td>
        </tr>
        </table>
        <form class="lform" action="leavecode.php" method="post">
         <h2 style="color:#25cff9" >Leave Request Form</h2>
          <?php
          if($lv==1)
          echo "Leave requested!!";
          if($lv==2)
          echo "Server Error!!";
          ?>
          <table style="color:#25cff9">
        <tr><td>    <span>To:</span>  </td><td>   <input type="date" class="text" name="todate"/></td></tr>
        <tr><td>        <span>From:</span>   </td><td>  <input type="date" class="text" name="fromdate"/></td></tr>
        <tr><td>    <span>Reason:</span>  </td><td>  <textarea name="reason" class="text" rows="5" cols="50" placeholder="Leave Reason" style="resize:none;" maxlength="200"></textarea>
        </td></tr>
        <tr> <td>    <span>Month:</span></td><td>
        <select class="month" name="month">
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">Sep</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
        </select>
        </td></tr>
		<tr><td>        <span>Year:</span>   </td><td>  <input type="text" class="text" name="year"/></td></tr>
        <tr>
        <td colspan="2"><input style="background-color:red;color:white" type="submit" name="submit" value="SUBMIT">
        </tr>
      </table>
      </form>




        </div>
    </div>
</div>
  </div>
  </body>
</html>
