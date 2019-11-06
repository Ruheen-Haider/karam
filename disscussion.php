<?php
mysql_connect('localhost','root','');
mysql_select_db("karam");
$query="select * from tbl_question";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/disscussion.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action="question.php" method="post">
<div id="outer">


<div id="one">

<div id="dash"></div>
<div id="h1">Disscussion
</div>
</div>

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

<div id="a1">
Add Question
<textarea name="ques">
</textarea>
<br/><br/>
<input type="submit" value="add"/>
</div>
</form>
<table align="center" border="1px" id="tbl">
<tr>
<th>S.NO</th>
<th>Question</th>
<th>Post Answer</th>
<th>View Answer</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row['question'];?></td>
	<td><a href="post.php?qid=<?php echo $row['0'];?>">post</a></td>
	<td><a href="view.php?qid=<?php echo $row['0'];?>">view</a></td>
	</tr>
<?php
$a++;
}
?>
</table>
</div>
</form>
</body>
</html>