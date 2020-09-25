<?php
require"../includes/common.php";
if((!isset($_SESSION['email'])  && $_SESSION['type'] == "recruiter"))
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
	<?php include "../includes/header.php";?>
	<br/><br/><br/><br/>
<div class="container">
	<div class="jumbotron" style="background-color:#82f7afb8;">
		<center><h2>Recruiter</h2></center>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-4 col-sm-6">
			<div class="thumbnail">
               <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Post Job<br> Requirement</h3><br/>
						<p><a href="postJobRequirement.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-plus-sign"> Post</a></p> 
					</center>
				</div>
			   </div>	
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="thumbnail">
                <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Judge <br>Questions</h3><br/>
						<p><a href="judgeQuestions.php?count=0" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-pencil">  Judge</a></p> 
					</center>
				</div>
			  </div>	
			</div>
		</div>
	 </div>
	<div class="row">
	    <div class="col-md-offset-2 col-md-4 col-sm-6">
			<div class="thumbnail">
                <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>View <br>Recommendations</h3><br/>
						<p><a href="viewRecommendations.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-search"> View</a></p> 
					</center>
				</div>
			   </div>	
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="thumbnail">
                <div style="background-image: url('g2.jpg');"> 
				<div class="caption">
					<center><h3>Upload Skill Development Courses</h3><br/>
						<p><a href="uploadSDC.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-pushpin"> Upload</a></p> 
					</center>
				</div>
			  </div>	
			</div>
		</div>
    </div><br/><br/><br/>
</div>
	<?php include "../includes/footer.php"; ?>
</body>
</html>
