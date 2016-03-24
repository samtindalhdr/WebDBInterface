<?php

	session_start();
	
	include("connection.php");
	
	$query="UPDATE G00 SET Electrical='".mysqli_real_escape_string($link, $_POST['electricalCHK'])."'WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	$query="UPDATE G00 SET Date=now() WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	if($_POST['electricalCHK']=='1'){
		$query="UPDATE G00 SET ElectricalDate=now() WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);		
	}else{
		$query="UPDATE G00 SET ElectricalDate='' WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);
	}
?>	


