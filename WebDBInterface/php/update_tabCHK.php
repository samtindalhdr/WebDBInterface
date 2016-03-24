<?php

	session_start();
	
	include("connection.php");
	
	$query="UPDATE G00 SET TAB='".mysqli_real_escape_string($link, $_POST['tabCHK'])."'WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	$query="UPDATE G00 SET Date=now() WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	if($_POST['tabCHK']=='1'){
		$query="UPDATE G00 SET TABDate=now() WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);		
	}else{
		$query="UPDATE G00 SET TABDate='' WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);
	}
?>	


