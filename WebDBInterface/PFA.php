<?php

	session_start();
	
	include("connection.php");
	
	$query="SELECT access FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link,$query);
	
	$row = mysqli_fetch_array($result);
	
	$access=$row['access'];
	
	if ( $access >= 8){
		echo "
			<script type='text/javascript'>
				var hideAddUser=0;
			</script>
			";
	}else{
		echo "
			<script type='text/javascript'>
				var hideAddUser=1;
			</script>
			";
	}
	// Session variables - will come from other page
	$_SESSION['unit'] = 4;
	$_SESSION['ProjectID'] = '123456';
	$_SESSION['ProjectName'] = 'Browser Headquarters Building';
	$_SESSION['Client'] = 'Browser, Inc.';
	
	
	// Set Project variables
	$project = $_SESSION['ProjectID'];
	$projectName = $_SESSION['ProjectName'];
	$client = $_SESSION['Client'];

	
	// Get G00 form data
	
	$query="SELECT * FROM G00 WHERE id = '".$_SESSION['unit']."'";	
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){		
		$equip = $row['EquipmentID'];
		$sync = $row['Sync'];
		
		//CxA
		$CxAuser = $row['CxAUser'];
		$comments = $row['Comments'];
		$Pass = $row['Pass'];
		$PassDate = $row['PassDate'];
		$Sample = $row['Sample'];
		$Samples = $row['Samples'];
		$Attempt = $row['Attempt'];
		$Attempts = $row['Attempts'];
		$AttemptDate = $row['AttemptDate'];
		if ($Pass == 1){
			echo "
			<script type='text/javascript'>
				var cxaCHK=1;
			</script>
			";
		}else{
			echo "
			<script type='text/javascript'>
				var cxaCHK=0;
			</script>
			";
		}
		
		//GC
		$GCUser = $row['GCUser'];
		$commentsGC = $row['CommentsGC'];
		$GCDate = $row['GCDate'];
		$GC = $row['GC'];
		if ($GC == 1){
			echo "
			<script type='text/javascript'>
				var gcCHK=1;
			</script>
			";
		}else{
			echo "
			<script type='text/javascript'>
				var gcCHK=0;
			</script>
			";
		}		
		
		//Mechanical
		$i = 1;
		$MechWet = $row["MechWet"];
		if ($MechWet == 1){
			echo "
			<script type='text/javascript'>
				var mwCHK=1;
			</script>
			";
		}else{
			echo "
			<script type='text/javascript'>
				var mwCHK=0;
			</script>
			";
		}
		$MechWetUser = $row["MechWetUser"];
		$MechWetDate = $row["MechWetDate"];
		$MechDry = $row["MechDry"];
		if ($MechDry == 1){
			echo "
			<script type='text/javascript'>
				var mdCHK=1;
			</script>
			";
		}else{
			echo "
			<script type='text/javascript'>
				var mdCHK=0;
			</script>
			";
		}
		$MechDryUser = $row["MechDryUser"];
		$MechDryDate = $row["MechDryDate"];
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
		if ($Controls == 1){
			echo "
			<script type='text/javascript'>
				var cCHK=1;
			</script>
			";
		}else{
			echo "
			<script type='text/javascript'>
				var cCHK=0;
			</script>
			";
		}
		$ControlsUser = $row["ControlsUser"];
		$ControlsDate = $row["ControlsDate"];
		$TAB = $row["TAB"];
		if ($TAB == 1){
			echo "
			<script type='text/javascript'>
				var tCHK=1;
			</script>
			";
		}else{
			echo "
			<script type='text/javascript'>
				var tCHK=0;
			</script>
			";
		}
		$TABUser = $row['TABUser'];
		$TABDate = $row['TABDate'];
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
		if ($Electrical == 1){
			echo "
			<script type='text/javascript'>
				var eCHK=1;
			</script>
			";
		}else{
			echo "
			<script type='text/javascript'>
				var eCHK=0;
			</script>
			";
		}
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
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		
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
			
			.form-control[type="text"]{
				margin-right:20px;   		
			}
			
			#sample{
				margin-right:0;
			}
			
			#attempt{
				margin-right:0;
			}
			
			#attempts{
				margin-right:0;
			}
			
			#Allowable{
				margin-right:30px;
			}
			
			.checkboxes[type="checkbox"]{
				margin-left:5px;
				margin-right:30px;
				margin-top:-2px;
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
					<a class="navbar-brand">Commissioning project for <? echo $client ?></a>
				</div>
				
				<div class="collapse navbar-collapse">				
					<div class="pull-right">
						<ul class="navbar-nav nav">
							<li><a href="index.php?logout=1">Log Out</a></li>				
							<li id="adduser"><a href="newuser.php">Add User</a></li>
						</ul>
					</div>					
				</div>				
			</div>			
		</div>
	  
		<!-- Main  -->
		<div class="container contentContainer" id="topContainer">	 
			<div class="row">			
				<div class="col-md-8 col-md-offset-2" id="topRow">				
					<h1 class="marginTop" > <? echo $projectName ?></h1>					 
					<p class="lead" >Pre-functional acceptance testing for unit: <? echo $equip ?></p>										
					<div class="panel-group" id="accordion">
					
						<div class="panel panel-info">							
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#mechanical">Mechanical</a>
								</h4>
							</div>
							
							<div id="mechanical" class="panel-collapse collapse">
								<div class="panel-body">
									<a>Mechanical contractor verifies general installation is complete and all of the following are per contract documents, as applicable.</a>
									<p></p>
									<?php echo nl2br($MechTest); ?> 
								</div>
										
								<div class="panel-footer">		
									<form method="post" class="form-inline">
										<div class="form-group">
											<label>Wet Side Mechanical Complete</label> <input type="checkbox" class="checkboxes" id="mechwetCHK" name="mechwetCHK">
											<label for="mwUser">Completed By</label>										
											<input type="text" class="form-control" id="mwUser" name="mwUser" value="<? echo($MechWetUser); ?>"/>
											<label for="mwDate">Completed On</label>
											<input type="date" class="form-control" id="mwDate" name="mwDate" value="<? echo($MechWetDate); ?>" disabled>
											<p></p>
											<label>Dry Side Mechanical Complete</label> <input type="checkbox" class="checkboxes" id="mechdryCHK" name="mechdryCHK">
											<label for="mdUser">Completed By</label>
											<input type="text" class="form-control" id="mdUser" name="mdUser" value="<? echo($MechDryUser); ?>">
											<label for="mdDate">Completed On</label>
											<input type="date" class="form-control" id="mdDate" name="mdDate" value="<? echo($MechDryDate); ?>" disabled>
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
									<a>Controls / TAB contractors verify their respective installations are complete and all of the following are per contract documents, as applicable.</a>
									<p></p>
									<?php echo nl2br($ControlsTest); ?> 
								</div>
										
								<div class="panel-footer">
									<form method="post" class="form-inline">
										<div class="form-group">
											<label>Controls Complete</label> <input type="checkbox" class="checkboxes" id="controlsCHK" name="controlsCHK">
											<label for="cUser">Completed By</label>
											<input type="text" class="form-control" id="cUser" name="cUser" value="<? echo($ControlsUser); ?>">
											<label for="cDate">Completed On</label>
											<input type="date" class="form-control" id="cDate" name="cDate" value="<? echo($ControlsDate); ?>" disabled>
											<p></p>
											<label>TAB Complete</label> <input type="checkbox" class="checkboxes" id="tabCHK" name="tabCHK">
											<label for="tUser">Completed By</label>
											<input type="text" class="form-control" id="tUser" name="tUser" value="<? echo($TABUser); ?>">
											<label for="tDate">Completed On</label>
											<input type="date" class="form-control" id="tDate" name="tDate" value="<? echo($TABDate); ?>" disabled>
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
									<a>Electrical contractor verifies electrical installation is complete and all of the following are per contract documents, as applicable.</a>
									<p></p>
									<?php echo nl2br($ElectricalTest); ?> 
								</div>
										
								<div class="panel-footer">	
									<form method="post" class="form-inline">
										<div class="form-group">
											<label>Electrical Complete</label> <input type="checkbox" class="checkboxes" id="electricalCHK" name="electricalCHK">
											<label for="eUser">Completed By</label>
											<input type="text" class="form-control" id="eUser" name="eUser" value="<? echo($ElectricalUser); ?>">
											<label for="eDate">Completed On</label>
											<input type="date" class="form-control" id="eDate" name="eDate" value="<? echo($ElectricalDate); ?>" disabled>
										</div>	
									</form>
								</div>
							</div>	
						</div>
						
						<div class="panel panel-info">							
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#GCcomments">GC / Comments</a>
								</h4>
							</div>
							
							<div id="GCcomments" class="panel-collapse collapse">
								<div class="panel-body">
									<textarea id="GCcommentsText" class="form-control" rows="10"><?php echo $commentsGC; ?></textarea> 
								</div>
										
								<div class="panel-footer">
									<form method="post" class="form-inline">
										<div class="form-group">
											<label>GC Installation Verification</label> <input type="checkbox" class="checkboxes" id="gcCHK" name="gcCHK">
											<label for="gcUser">Checked By</label>
											<input type="text" class="form-control" id="gcUser" name="gcUser" value="<? echo($GCUser); ?>">
											<label for="gcDate">Checked On</label>
											<input type="date" class="form-control" id="gcDate" name="gcDate" value="<? echo($GCDate); ?>" disabled>			
										</div>	
									</form>
								</div>
							</div>	
						</div>
						
						<div class="panel panel-info">							
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#CxAcomments">CxA / Comments</a>
								</h4>
							</div>
							
							<div id="CxAcomments" class="panel-collapse collapse">
								<div class="panel-body">
									<textarea id="CxAcommentsText" class="form-control" rows="10"><?php echo $comments; ?></textarea> 
								</div>
										
								<div class="panel-footer">	
									<form method="post" class="form-inline">
										<div class="form-group" class="form-inline">
											<label>PFC Passed</label> <input type="checkbox" class="checkboxes" id="cxaCHK" name="cxaCHK">
											<label for="CxAUser">CxA Agent</label>
											<input type="text" class="form-control" id="cxaUser" name="cxaUser" value="<? echo($CxAuser); ?>">
											<label for="passDate">Passed Date</label>
											<input type="date" class="form-control" id="passDate" name="passDate" value="<? echo($PassDate); ?>" disabled>
											<p></p>
											<label for="sample">Sample</label>
											<input type="text" class="form-control" id="sample" name="sample" value="<? echo($Sample); ?>">
											<label for="samples">of</label>
											<input type="text" class="form-control" id="samples" name="samples" value="<? echo($Samples); ?>">
											<p></p>
											<label for="sample">Attempt</label>
											<input type="text" class="form-control" id="attempt" name="attempt" value="<? echo($Attempt); ?>">
											<label for="samples">of</label>
											<input type="text" class="form-control" id="attempts" name="attempts" value="<? echo($Attempts); ?>">
											<label id="Allowable">Allowable</label>
											<p></p>
											<p></p>
											<label for="attemptDate">Last Attempted Date</label>
											<input type="date" class="form-control" id="attemptDate" name="attemptDate" value="<? echo($AttemptDate); ?>">											
										</div>	
									</form>
								</div>
							</div>	
						</div>							
					</div>
						
					
				</div>
			</div>
		</div> 
		
		<script type="text/javascript">
			
			// Globals routines
			var d = (new Date()).toISOString().substring(0, 19).replace('T', ' ');
			
			$(".contentContainer").css("min-height",$(window).height());
			
			if(hideAddUser==1){
				$("#adduser").css("display", "none");
			}
	
	
			// Mechanical Update Section
			$("input#mwUser").keyup(function() {
				$.post("php/update_mwUser.php", {mwUser:$("#mwUser").val()} );
			});
			
			$("#mechwetCHK").change(function() {
				if ($('input[name=mechwetCHK]').is(':checked')){
					$('input[name=mechwetCHK]').val('1');
					$.post("php/update_mechwetCHK.php", {mechwetCHK:$("#mechwetCHK").val()} );
					$('input[name=mwDate]').val(d);
					$("#mechanical").load("load.html");
				} else {
					$('input[name=mechwetCHK]').val('0');
					$.post("php/update_mechwetCHK.php", {mechwetCHK:$("#mechwetCHK").val()} );
					$('input[name=mwDate]').val('');
					$("#mechanical").load("load.html");
				}						
			});		

			if(mwCHK==1){
				$('input[name=mechwetCHK]').attr('checked', true);
			} else {
				$('input[name=mechwetCHK]').attr('checked', false);
			}
			
			$("input#mdUser").keyup(function() {
				$.post("php/update_mdUser.php", {mdUser:$("#mdUser").val()} );
			});
			
			$("#mechdryCHK").change(function() {
				if ($('input[name=mechdryCHK]').is(':checked')){
					$('input[name=mechdryCHK]').val('1');
					$.post("php/update_mechdryCHK.php", {mechdryCHK:$("#mechdryCHK").val()} );
					$('input[name=mdDate]').val(d);
					$("#mechanical").load("load.html");
				} else {
					$('input[name=mechdryCHK]').val('0');
					$.post("php/update_mechdryCHK.php", {mechdryCHK:$("#mechdryCHK").val()} );
					$('input[name=mdDate]').val('');
					$("#mechanical").load("load.html");
				}						
			});		

			if(mdCHK==1){
				$('input[name=mechdryCHK]').attr('checked', true);
			} else {
				$('input[name=mechdryCHK]').attr('checked', false);
			}
			
			
			// Controls Update Section
			$("input#cUser").keyup(function() {
				$.post("php/update_cUser.php", {cUser:$("#cUser").val()} );
			});
			
			$("#controlsCHK").change(function() {
				if ($('input[name=controlsCHK]').is(':checked')){
					$('input[name=controlsCHK]').val('1');
					$.post("php/update_controlsCHK.php", {controlsCHK:$("#controlsCHK").val()} );
					$('input[name=cDate]').val(d);
					$("#mechanical").load("load.html");
				} else {
					$('input[name=controlsCHK]').val('0');
					$.post("php/update_controlsCHK.php", {controlsCHK:$("#controlsCHK").val()} );
					$('input[name=cDate]').val('');
					$("#mechanical").load("load.html");
				}						
			});		

			if(cCHK==1){
				$('input[name=controlsCHK]').attr('checked', true);
			} else {
				$('input[name=controlsCHK]').attr('checked', false);
			}
			
			$("input#tUser").keyup(function() {
				$.post("php/update_tUser.php", {tUser:$("#tUser").val()} );
			});
			
			$("#tabCHK").change(function() {
				if ($('input[name=tabCHK]').is(':checked')){
					$('input[name=tabCHK]').val('1');
					$.post("php/update_tabCHK.php", {tabCHK:$("#tabCHK").val()} );
					$('input[name=tDate]').val(d);
					$("#mechanical").load("load.html");
				} else {
					$('input[name=tabCHK]').val('0');
					$.post("php/update_tabCHK.php", {tabCHK:$("#tabCHK").val()} );
					$('input[name=tDate]').val('');
					$("#mechanical").load("load.html");
				}						
			});		

			if(tCHK==1){
				$('input[name=tabCHK]').attr('checked', true);
			} else {
				$('input[name=tabCHK]').attr('checked', false);
			}
			
			
			// Electrical Update Section
			$("input#eUser").keyup(function() {
				$.post("php/update_eUser.php", {eUser:$("#eUser").val()} );
			});
			
			$("#electricalCHK").change(function() {
				if ($('input[name=electricalCHK]').is(':checked')){
					$('input[name=electricalCHK]').val('1');
					$.post("php/update_electricalCHK.php", {electricalCHK:$("#electricalCHK").val()} );
					$('input[name=eDate]').val(d);
					$("#mechanical").load("load.html");
				} else {
					$('input[name=electricalCHK]').val('0');
					$.post("php/update_electricalCHK.php", {electricalCHK:$("#electricalCHK").val()} );
					$('input[name=eDate]').val('');
					$("#mechanical").load("load.html");
				}						
			});		

			if(eCHK==1){
				$('input[name=electricalCHK]').attr('checked', true);
			} else {
				$('input[name=electricalCHK]').attr('checked', false);
			}	
			
			
			// GC Comments Section
			$("textarea#GCcommentsText").keyup(function() {
				$.post("php/update_GCcomments.php", {GCcomments:$("#GCcommentsText").val()} );					
			});	
				
			$("input#gcUser").keyup(function() {
				$.post("php/update_gcUser.php", {gcUser:$("#gcUser").val()} );
			});
			
			$("#gcCHK").change(function() {
				if ($('input[name=gcCHK]').is(':checked')){
					$('input[name=gcCHK]').val('1');
					$.post("php/update_gcCHK.php", {gcCHK:$("#gcCHK").val()} );
					$('input[name=gcDate]').val(d);
					$("#mechanical").load("load.html");
				} else {
					$('input[name=gcCHK]').val('0');
					$.post("php/update_gcCHK.php", {gcCHK:$("#gcCHK").val()} );
					$('input[name=gcDate]').val('');
					$("#mechanical").load("load.html");
				}						
			});		

			if(gcCHK==1){
				$('input[name=gcCHK]').attr('checked', true);
			} else {
				$('input[name=gcCHK]').attr('checked', false);
			}
			
		
			// CxA Comments Section
			$("textarea#CxAcommentsText").keyup(function() {
				$.post("php/update_CxAcomments.php", {CxAcomments:$("#CxAcommentsText").val()} );					
			});
			
			$("input#cxaUser").keyup(function() {
				$.post("php/update_cxaUser.php", {cxaUser:$("#cxaUser").val()} );
			});
			
			$("#cxaCHK").change(function() {
				if ($('input[name=cxaCHK]').is(':checked')){
					$('input[name=cxaCHK]').val('1');
					$.post("php/update_cxaCHK.php", {cxaCHK:$("#cxaCHK").val()} );
					$('input[name=passDate]').val(d);
					$("#mechanical").load("load.html");
				} else {
					$('input[name=cxaCHK]').val('0');
					$.post("php/update_cxaCHK.php", {cxaCHK:$("#cxaCHK").val()} );
					$('input[name=passDate]').val('');
					$("#mechanical").load("load.html");
				}						
			});		

			if(cxaCHK==1){
				$('input[name=cxaCHK]').attr('checked', true);
			} else {
				$('input[name=cxaCHK]').attr('checked', false);
			}
			
			$("input#sample").keyup(function() {
				$.post("php/update_sample.php", {sample:$("#sample").val()} );
			});
			
			$("input#samples").keyup(function() {
				$.post("php/update_samples.php", {samples:$("#samples").val()} );
			});
			
			$("input#attempt").keyup(function() {
				$.post("php/update_attempt.php", {attempt:$("#attempt").val()} );
			});
			
			$("input#attempts").keyup(function() {
				$.post("php/update_attempts.php", {attempts:$("#attempts").val()} );
			});
			
			$("input#attemptDate").keyup(function() {
				$.post("php/update_attemptDate.php", {attemptDate:$("#attemptDate").val()} );
			});

			

			// alert('end of code');

		</script>
		
	</body>
</html>