<?php



?>
<html>
<head>
<link href="css/feedback.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action="feedbackcode.php" method="post">
<div id="outer">

<div class="dropdown">
      <button class="dropbtn">--Jump To--</button>
		<div class="dropdown-content">
		<a href="profile.php">viewprofile</a>
		<a href="disscussion.php">disscussion</a>
		<a href="empchngepass.php">change password</a>
		<a href="logout.php">logout</a>
		<a href="askleave.php">ask leave</a>
		<a href="feedback.php">feedback</a>
		</div>
	</div>

<div id="one">
<div id="dash"></div>
<div id="h1">FEEDBACK
</div>
</div>
<div id="a1">
<textarea id="a2" name="txt">
</textarea>
<div id="a3">enter your feedback
<input type="submit" value="send"/>
</div>
</div>
</div>
</form>
</body>
</html>