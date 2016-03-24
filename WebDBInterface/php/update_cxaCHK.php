<?php

	session_start();
	
	include("connection.php");
	
	$query="UPDATE G00 SET Pass='".mysqli_real_escape_string($link, $_POST['cxaCHK'])."'WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	$query="UPDATE G00 SET Date=now() WHERE id='".$_SESSION['unit']."'";	
	mysqli_query($link, $query);
	
	if($_POST['cxaCHK']=='1'){
		$query="UPDATE G00 SET PassDate=now() WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);		
	}else{
		$query="UPDATE G00 SET PassDate='' WHERE id='".$_SESSION['unit']."'";	
		mysqli_query($link, $query);
	}
?>	


