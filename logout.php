<?php
session_start();
if(isset($_SESSION['t1']))
{
	unset($_SESSION['t1']);
	header("location:login.php");
}
?>