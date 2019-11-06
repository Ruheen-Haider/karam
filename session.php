<?php
session_start();
if($_SESSION['check']=="")
{
	session_destroy();
	header("Location:index.php");
}
?>