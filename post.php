<?php
$qid=$_REQUEST['qid'];
//echo $qid;
?>
<html>
<head>
<link href="css/post.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action="answer.php" method="post">
<div id="outer">
<div class="dropdown">
      <button class="dropbtn">--Jump To--</button>
		<div class="dropdown-content">
		<a href="profile.php">profile</a>
		<a href="disscussion.php">disscussion</a>
		<a href="chngepass.php">change password</a>
		<a href="logout.php">logout</a>ment</a>
		<a href="askleave.php">ask leave</a>
		<a href="feedback.php">feedback</a>
		</div>
	</div>
<div id="outer1">
<div id="dash"></div>
<div id="h1">Disscussion
</div>
</div>
<input type="hidden" name="qid" value="<?php echo $qid;?>"/>
<div id="one">
Post Answer
<textarea name="ans">
</textarea><br/><br/>
<input type="submit" value="add"/>
</div>
</div>
</form>
</body>
</html>