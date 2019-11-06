<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==2)
{
	echo "Enter the correct user name and password!!!";
}
if($msg==3)
{
	echo "PASSWORD HAS BEEN CHANGED!!!";
}
?>
<html>
<head>
<style>

@font-face
{
	font-family:cd;
	src:url('Caviar_Dreams_Bold.ttf');
}
</style>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div id="outer">
<div id="outer1">
<div id="img1"></div>
<div id="img2"></div>
</div>
<div id="outer2">
<div id="img">LOGIN PANEL</div>
<div id="txt">
<form action="code.php" method="post">
<table id="tbl">
<tr><td>USER</td><td>

<input type="radio" name="a" value="admin"/>Admin
<input type="radio" name="a" value="employee"/>Employee</td></tr>
<tr><td>USER_ID</td>
<td><input type="email" name="email" style="height:25px;width:150px;margin-top:15px;border-radius:7px"/></td></tr>
<tr><td>PASSWORD</td>
<td><input type="password" name="pass" style="height:25px;width:150px;margin-top:15px;border-radius:7px"/></td></tr>
<td><input type="submit" value="login" style="height:40px;width:100px;margin-top:30px;border-radius:7px"/></td></tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>