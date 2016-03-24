<?php

	session_start();
	
	include("connection.php");
	
	$query="UPDATE G00 SET Attempts='".mysqli_real_escape_string($link, $_POST['attempts'])."'WHERE id='".$_SESSION['unit']."'";
	
	mysqli_query($link, $query);
	
	$query="UPDATE G00 SET Date=now() WHERE id='".$_SESSION['unit']."'";
	
	mysqli_query($link, $query);
	
?>	


