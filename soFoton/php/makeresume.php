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
           <!-- Latest compiled and minified CSS  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        		<link rel="stylesheet" text="text/css" href="sty.css"/>

	</head>
<body>
	
 <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../index.php">Employment Assistant</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                                     
                    <li><a href = "../../soFoton/php/settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href = "../../soFoton/php/logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>

                                </ul>
        </div>
    </div>
</div>
	<br/><br/><br/><br/>
<div class="container">
	<div class="jumbotron" style="background-color:#82f7afb8;">
		<center><h2>Make Resume</h2></center>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-4">
			<div class="thumbnail">
			    <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Create Resume</h3><br/>
						<p><a href="create_resume.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-pencil"> Make</a></p> 
					</center>
				</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="thumbnail">
			    <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Edit Resume</h3><br/>
						<p><a href="edit_resume.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-user">  Edit</a></p> 
					</center>
				</div>	
				</div>
			</div>
		</div>
        <div class="col-md-4 col-sm-4">
			<div class="thumbnail">
			    <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Upload</h3><br/>
						<p><a href="upload_resume.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-th-list">  Upload</a></p> 
					</center>
				</div>	
				</div>
			</div>
		</div>
	 </div>
	
</div>
		<?php include "../includes/footer.php"; ?>
</body>
</html>
