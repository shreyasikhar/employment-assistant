<?php
require"../includes/common.php";
if((!isset($_SESSION['email'])  && $_SESSION['type'] != "candidate"))
    header('location:login.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Employment Assistant</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png" size="16*16">
           <!--Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        		<link rel="stylesheet" text="text/css" href="sty.css"/>

    </head>
<body>
<?php include"../includes/header.php";?>	
 
	<br/><br/><br/>
<div class="container">
	<div class="jumbotron" style="background-color:#82f7afb8;">
		<center><h2>Candidate</h2></center>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-4">
			<div class="thumbnail">
			    <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Make Resume</h3><br/>
						<p><a href="makeresume.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-pencil"> Make Resume</a></p> 
					</center>
				</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="thumbnail">
				<div style="background-image: url('g2.jpg');"> 
			    	<div class="caption">
					<center><h3>Profile</h3><br/>
						<p><a href="viewprofile.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-user">  View Profile</a></p> 
					</center>
				</div>	
			  </div>
			</div>
		</div>
        <div class="col-md-4 col-sm-4">
			<div class="thumbnail">
				<div style="background-image: url('g2.jpg');"> 
				   <div class="caption">
					<center><h3>View Test Records</h3><br/>
						<p><a href="testrecords.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-th-list">  View Records</a></p> 
					</center>
				</div>
			  </div>	
			</div>
		</div>
	 </div>
	<div class="row">
	    <div class=" col-md-4 col-sm-4">
			<div class="thumbnail">
				<div style="background-image: url('g2.jpg');"> 
				  <div class="caption">
					<center><h3>Respond to Recruiter</h3><br/>
						<p><a href="respondtorecruiter.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-envelope"> Respond to Recruiter</a></p> 
					</center>
				</div>
			  </div>	
			</div>
		</div>
		<div class=" col-md-4 col-sm-4">
			<div class="thumbnail">
			    <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Give Test</h3><br/>
						<p><a href="test.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-list-alt"> Test</a></p> 
					</center>
				</div>
				</div>
			</div>
		</div>
        <div class=" col-md-4 col-sm-4">
			<div class="thumbnail">
			    <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Learn New Skills</h3><br/>
						<p><a href="learnskill.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-education"> Skills</a></p> 
					</center>
				</div>
				</div>
			</div>
		</div>
    </div><br/><br/><br/><br>
</div>
		<?php include "../includes/footer.php"; ?>
</body>
</html>
