<?php



?>
<html>
<head>
<link href="css/askleave.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form>
<div id="outer">

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


<div id="h1">Leave

</div>
</div>

<div id="outer2">
<!--<center><h1>LEAVE</h1></center>-->

<table id="tbl">
<tr>
<tr><td>Email</td>
<td><input type="email" name="email"/></td>
</tr>
<tr><td>REASON
</td><td><textarea name="reason"></textarea></td></tr>
<tr><td>TO</td><td>
<input type="date" name="to"/></td></tr>
<tr><td>FROM</td><td>
<input type="date" name="from"/></td></tr>
<tr><td>MONTH</td><td>
<select name="mon">
<option>--select month--</option>
<option>january</option>
<option>febuary</option>
<option>march</option>
<option>april</option>
<option>may</option>
<option>june</option>
<option>july</option>
<option>august</option>
<option>september</option>
<option>october</option>
<option>november</option>
<option>december</option>
</select></td></tr>
<tr><td>Year</td>
<td><input type="text" placeholder="year" name="year"/></td></tr>

<tr><td><input type="submit" value="submit" style="height:30px;width:60px;margin-top:20px"/></td></tr>
</table>
</div>
</form>
</body>
</html>