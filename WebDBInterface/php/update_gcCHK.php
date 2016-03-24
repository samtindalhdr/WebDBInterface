<?php

	session_start();
	
	include("connection.php");
	
	$query="UPDATE G00 SET GC='".mysqli_real_escape_string($link, $_POST['gcCHK'])."'WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	$query="UPDATE G00 SET Date=now() WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	if($_POST['gcCHK']=='1'){
		$query="UPDATE G00 SET GCDate=now() WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);		
	}else{
		$query="UPDATE G00 SET GCDate='' WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);
	}
?>	


