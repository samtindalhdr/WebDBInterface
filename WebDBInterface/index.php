<?php 
	session_start;
	include("login.php"); 
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   <style>
   
   		.navbar-brand{
   			font-size:1.5em; 
			 padding-top=5px;
   		}
   		
   		#topContainer{
   			background-image:url("images/background.png");
   			background-size:cover;
			background-repeat: no-repeat;
			color:#330000;
   		}
   		
   		#topRow {
   			margin-top:300px;
   			text-align:center;	
   		}
   
   		#topRow h1{
   			font-size:300%;				
   		}
   		
   		.bold{
   			font-weight:bold; 
			color:#CCFF00;
		}
   
   		.marginTop{
   			margin-top:30px;   
			
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
  		
  			<form class="navbar-form navbar-right" method="post"> 
  			
  				<div class="form-group">
  				
  					<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
  																								   
  				</div>
  				
  				<div class="form-group">
  				
  					<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  																											
  				</div>
  				
					<input type="submit" name= "submit" class="btn btn-info" value="Log In">
  				
  			</form>
  			
  		</div>
  		
  	</div>	
  	
  </div>
  
  
 <div class="container contentContainer" id="topContainer">
  		<div class="row">
  		
  			<div class="col-md-6 col-md-offset-3" id="topRow">
 			 
 			 <h1 class="marginTop">Facilities Services</h1>
 			 
 			 <p class="lead">Commissioning Data Management System</p>
 			 
 			 
 			 <?php
 			 
 			 	if ($error) {
 			 	
 			 		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
 			 	
 			 	}
 			 	
 			 	if ($message) {
 			 	
 			 		echo '<div class="alert alert-success">'.addslashes($message).'</div>';
 			 	
 			 	}
 			 
 			 ?>
 			 
 			 
 			 <p class="bold marginTop">Log In Above</p>
 			 
 			 </div>
 		 
		</div>
		
  </div>
  
	

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/bootstrap.min.js"></script>
    
    <script>
    
    
		$(".contentContainer").css("min-height",$(window).height());
    
    </script>
    
  </body>
</html>