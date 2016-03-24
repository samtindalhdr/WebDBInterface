<?php

	session_start();
	
	include("connection.php");
	
	$query="UPDATE G00 SET Sample='".mysqli_real_escape_string($link, $_POST['sample'])."'WHERE id='".$_SESSION['unit']."'";
	
	mysqli_query($link, $query);
	
	$query="UPDATE G00 SET Date=now() WHERE id='".$_SESSION['unit']."'";
	
	mysqli_query($link, $query);
	
?>	


