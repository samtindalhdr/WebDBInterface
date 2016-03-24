<?php

	session_start();
	
	include("connection.php");
	
	$query="UPDATE G00 SET MechWet='".mysqli_real_escape_string($link, $_POST['mechwetCHK'])."'WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	$query="UPDATE G00 SET Date=now() WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	if($_POST['mechwetCHK']=='1'){
		$query="UPDATE G00 SET MechWetDate=now() WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);		
	}else{
		$query="UPDATE G00 SET MechWetDate='' WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);
	}
?>	


