<?php

	session_start();
	
	include("connection.php");
	
	$query="SELECT access FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link,$query);
	
	$row = mysqli_fetch_array($result);
	
	$access=$row['access'];
	
	if ( $access == 9){
		$show="Admin - ".$access;
	}else{
		$show="User - ".$access;
		echo "
			<script type='text/javascript'>
				var H=1;
			</script>
			";
	}
	
	$_SESSION['unit'] = 4;
	
	// Get G00 form data
	
	$query="SELECT * FROM G00 WHERE id = '".$_SESSION['unit']."'";	
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){		
		$equip = $row['EquipmentID'];
		$project = $row['ProjectID'];
		$sync = $row['Sync'];
		
		//CxA
		$CxAuser = $row['CxAUser'];
		$comments = $row['Comments'];
		$Pass = $row['Pass'];
		$PassDate = $row['PassDate'];
		
		
		
		//Mechanical
		$i = 1;
		$MechWet = $row["MechWet"];
		$MechWetUser = $row["MechWetUser"];
		$MechWetDate = $row["MechWetDate"];
		if ($row["M01"]!=""){
			$MechTest = $i.". ".$row["M01"];
			$i = $i + 1;
		}
		if ($row["M02"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M02"];
			$i = $i + 1;
		}
		if ($row["M03"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M03"];
			$i = $i + 1;
		}
		if ($row["M04"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M04"];
			$i = $i + 1;
		}
		if ($row["M05"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M05"];
			$i = $i + 1;
		}
		if ($row["M06"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M06"];
			$i = $i + 1;
		}
		if ($row["M07"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M07"];
			$i = $i + 1;
		}
		if ($row["M08"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M08"];
			$i = $i + 1;
		}
		if ($row["M09"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M09"];
			$i = $i + 1;
		}
		if ($row["M10"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M10"];
			$i = $i + 1;
		}
		if ($row["M11"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M11"];
			$i = $i + 1;
		}
		if ($row["M12"]!=""){
			$MechTest = $MechTest."\n".$i.". ".$row["M12"];
			$i = $i + 1;
		}
		
		//Controls
		$i = 1;
		$Controls = $row["Controls"];
		$ControlsUser = $row["ControlsUser"];
		$ControlsDate = $row["ControlsDate"];
		if ($row["C01"]!=""){
			$ControlsTest = $i.". ".$row["C01"];
			$i = $i + 1;
		}
		if ($row["C02"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C02"];
			$i = $i + 1;
		}
		if ($row["C03"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C03"];
			$i = $i + 1;
		}
		if ($row["C04"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C04"];
			$i = $i + 1;
		}
		if ($row["C05"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C05"];
			$i = $i + 1;
		}
		if ($row["C06"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C06"];
			$i = $i + 1;
		}
		if ($row["C07"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C07"];
			$i = $i + 1;
		}
		if ($row["C08"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C08"];
			$i = $i + 1;
		}
		if ($row["C09"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C09"];
			$i = $i + 1;
		}
		if ($row["C10"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C10"];
			$i = $i + 1;
		}
		if ($row["C11"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C11"];
			$i = $i + 1;
		}
		if ($row["C12"]!=""){
			$ControlsTest = $ControlsTest."\n".$i.". ".$row["C12"];
			$i = $i + 1;
		}
		
		//Electrical
		$i = 1;
		$Electrical = $row["Electrical"];
		$ElectricalUser = $row["ElectricalUser"];
		$ElectricalDate = $row["ElectricalDate"];
		if ($row["E01"]!=""){
			$ElectricalTest = $i.". ".$row["E01"];
			$i = $i + 1;
		}
		if ($row["E02"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E02"];
			$i = $i + 1;
		}
		if ($row["E03"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E03"];
			$i = $i + 1;
		}
		if ($row["E04"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E04"];
			$i = $i + 1;
		}
		if ($row["E05"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E05"];
			$i = $i + 1;
		}
		if ($row["E06"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E06"];
			$i = $i + 1;
		}
		if ($row["E07"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E07"];
			$i = $i + 1;
		}
		if ($row["E08"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E08"];
			$i = $i + 1;
		}
		if ($row["E09"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E09"];
			$i = $i + 1;
		}
		if ($row["E10"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E10"];
			$i = $i + 1;
		}
		if ($row["E11"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E11"];
			$i = $i + 1;
		}
		if ($row["E12"]!=""){
			$ElectricalTest = $ElectricalTest."\n".$i.". ".$row["E12"];
			$i = $i + 1;
		}
		
		
		

	}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HDR Commissioning</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		
		<style>
	   
			.navbar-brand{
				font-size:1.8em;   			
			}
			
			#topContainer{
				background-image:url("background.jpg");
				height:400px;
				width:100%;
				background-size:cover;	
			}
			
			#topRow {
				margin-top:80px;
			}
	   
			#topRow h1{
				font-size:300%;   
			}
			
			.bold{
				font-weight:bold;
			}
	   
			.marginTop{
				margin-top:30px;   		
			}
			
			.alignleft{
				text-align:left;
			}
			
			.center{
				text-align:center;   		
			}
			
			.title {
				margin-top:100px;
				font-size:300%;   			
			}
			
			#footer{
				background-color: #B0D1FB;
				padding-top:70px;
				width:100%;
			}
			
			,marginBottom{
				margin-bottom:30px;   			
			}
			
			.appstoreImage{
				width:250px;   		
			}
		</style>

	</head>
  
	<body data-spy="scroll" data-target=".navbar-collapse">

		<div class="navbar navbar-default navbar-fixed-top">
		  
			<div class="container">
			
				<div class="navbar-header">
				
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
						
						<span class="icon-bar"></span>
							
					</button>
					
					
					<img class="navbar-brand" src="images/HDR_Logo_4C.png" align=left>
					<a class="navbar-brand">Commissioning</a>
					
				</div>
				
				<div class="collapse navbar-collapse">
				
					<div class="pull-right">
						<ul class="navbar-nav nav">
							<li><a href="index.php?logout=1">Log Out</a></li>				
							<li id="adduser"><a href="newuser.php">Add User</a></li>		
					</div>
					
				</div>
				
			</div>	
			
		</div>
	  
		<!-- Main  -->
		<div class="container contentContainer" id="topContainer">
	 
			<div class="row">
			
				<div class="col-md-8 col-md-offset-2" id="topRow">
				
					<h1 class="marginTop" >Project <? echo $project ?></h1>
					 
					<p class="lead" >Pre-Functional Testing for <? echo $equip ?></p>	
					
					<div class="panel-group" id="accordion">
					
						<div class="panel panel-info">
						
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#mechanical">Mechanical</a>
								</h4>
							</div>
							
							<div id="mechanical" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo nl2br($MechTest); ?> 
								</div>
										
								<div class="panel-footer">
									<form class="form-inline" role="form">
										<div class="form-group">
											<label>Wet Side Mechanical Complete <input type="checkbox" id="mechwet" value=<? $MechWet ?>></label>
											<label for="mwUser">Checked By</label>
											<input type="text" class="form-control" id="mwUser" value=<? $MechWetUser ?>>
											<label for="mwDate">Checked On</label>
											<input type="date" class="form-control" class="datepicker" id="mwDate" value=<? $MechWetDate ?>>
										</div>
									</form>
								</div>
							</div>	
						</div>
						
						<div class="panel panel-info">
						
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#controls">Controls</a>
								</h4>
							</div>
							
							<div id="controls" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo nl2br($ControlsTest); ?> 
								</div>
										
								<div class="panel-footer">
									<form class="form-inline" role="form">
										<div class="form-group">
											<label>Controls Complete <input type="checkbox" id="mechwet" value=<? $Controls ?>></label>
											<label for="cUser">Checked By</label>
											<input type="text" class="form-control" id="cUser" value=<? $ControlsUser ?>>
											<label for="cDate">Checked On</label>
											<input type="date" class="form-control" class="datepicker" id="cDate" value=<? $ControlsDate ?>>
										</div>
									</form>
								</div>
							</div>	
						</div>
						
						<div class="panel panel-info">
						
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#electrical">Electrical</a>
								</h4>
							</div>
							
							<div id="electrical" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo nl2br($ElectricalTest); ?> 
								</div>
										
								<div class="panel-footer">
									<form class="form-inline" role="form">
										<div class="form-group">
											<label>Electrical Complete <input type="checkbox" id="mechwet" value=<? $Electrical ?>></label>
											<label for="eUser">Checked By</label>
											<input type="text" class="form-control" id="eUser" value=<? $ElectricalUser ?>>
											<label for="eDate">Checked On</label>
											<input type="date" class="form-control" class="datepicker" id="eDate" value=<? $ElectricalDate ?>>
										</div>
									</form>
								</div>
							</div>	
						</div>
						
						<div class="panel panel-info">
						
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#CxAcomments">CxA Comments</a>
								</h4>
							</div>
							
							<div id="CxAcomments" class="panel-collapse collapse">
								<div class="panel-body">
									<textarea id="CxAcommentsText" class="form-control"><?php echo $comments; ?></textarea> 
								</div>
										
								<div class="panel-footer">
									<form class="form-inline" role="form">
										<div class="form-group">
											<label>PFC Passed <input type="checkbox" id="pass" value=<? $Pass ?>></label>
											<label for="CxAUser">CxA Agent</label>
											<input type="text" class="form-control" id="CxAUser" value=<? $CxAUser ?>>
											<label for="passDate">Passed Date</label>
											<input type="date" class="form-control" class="datepicker" id="passDate" value=<? $PassDate ?>>
										</div>
									</form>
								</div>
							</div>	
						</div>
						
						
					</div>
				</div>
			</div>		
		</div> 

		<script>
			
			if (H==1){myFunction();}
			
			$(".contentContainer").css("min-height",$(window).height());
			
			function myFunction() {
				document.getElementById("adduser").style.display = "none";
			}	
			
			$("mechwet").keyup(function() {
			
				$.post("updatediary.php", {diary:$("textarea").val()} );
			
			});
			
			$("CxAcommentsText").css("height",$(window).height()-110);
    	
			$("CxAcommentsText").keyup(function() {
    	
    		$.post("updateCxAcomments.php", {CxAcomments:$("CxAcommentsText").val()} );
    	
    	});

		
			
		</script>
		
	</body>
</html>