<?php
session_start();
error_reporting(0);
include("connection.php");
 ?>
 
<html lang="en" dir="ltr">
  <head>
  
    <link href="css/salary.css" rel="stylesheet" type="text/css"/>
  
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="lform" action="sal.php" method="post">
	<div id="outer">
	
	<div class="dropdown">
      <button class="dropbtn">--Jump To--</button>
		<div class="dropdown-content">
		<a href="profile.php">viewprofile</a>
		<a href="disscussion.php">disscussion</a>
		<a href="empchngepass.php">change password</a>
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
	
	<div id="a1">
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
      <input type="text" placeholder="year" pattern="[2][0][0-9][0-9]" maxlength="4" name="year"/><br/><br/>
      <input type="submit" name="submit" value="submit"/>
	  </div>
	  </div>
    </form>
  </body>
</html>
