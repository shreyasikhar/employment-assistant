<?php
require "../includes/common.php";
if(!isset($_SESSION['email']))
    header('location:../../index.php');
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
  

    <br><br><br><br><br><br>

        <div class="container">
	<div class="row row_style">
		<div class="col-xs-6 col-lg-offset-3">
				<div class="panel panel-primary">
				<div class="panel-heading"><h3><center>Create Resume</center></h3></div>
				<div class="panel-body">
			 <form method="post" action="create_resume_script.php">
				<div class="form-group">
				<label for="name"></label>
				 <input type="text" class="form-control" name="name" placeholder="Name">
			    </div>
			    <div class="form-group">
				<label for="email"></label><br>
				 <input type="email" class="form-control" name="email" placeholder="Email">
			    </div>
			     <div class="form-group">
				<label for="mobile"></label><br>
				 <input type="bigint" class="form-control" name="mobile" placeholder="Mobile">
			    </div>
                <div class="form-group">
				<label for="city"></label>
				 <input type="text" class="form-control" name="city" placeholder="City">
			    </div>
				 <div class="form-group">
				<label for="degree"></label><br>
				 <input type="text" class="form-control" name="degree" placeholder="Degree">
			    </div>
				 <div class="form-group">
				<label for="stream"></label><br>
				 <input type="text" class="form-control" name="stream" placeholder="Stream">
			    </div>
                <div class="form-group">
				<label for="endYear"></label><br>
				 <input type="text" class="form-control" name="endYear" placeholder="EndYear">
			    </div>
                <div class="form-group">
				<label for="degreeStatus"></label><br>
				 <input type="enum" class="form-control" name="degreeStatus" placeholder="DegreeStatus">
			    </div>
				<div class="form-group">
				<label for="collegeName"></label><br>
				 <input type="text" class="form-control" name="collegeName" placeholder="CollegeName">
			    </div>
				<div class="form-group">
				<label for="cgpa"></label><br>
				 <input type="float" class="form-control" name="cgpa" placeholder="CGPA">
			    </div>
				<div class="form-group">
				<label for="job"></label><br>
				 <input type="mediumtext" class="form-control" name="job" placeholder="Job">
			    </div>
				<div class="form-group">
				<label for="internship"></label><br>
				 <input type="mediumtext" class="form-control" name="internship" placeholder="Internship">
			    </div>
				<div class="form-group">
				<label for="training"></label><br>
				 <input type="mediumtext" class="form-control" name="training" placeholder="Training">
			    </div>
				<div class="form-group">
				<label for="project"></label><br>
				 <input type="mediumtext" class="form-control" name="project" placeholder="Project">
			    </div>
				<div class="form-group">
				<label for="skills"></label><br>
				 <input type="mediumtext" class="form-control" name="skills" placeholder="Skills">
			    </div>
				<div class="form-group">
				
				
				
 			   <center><button type="Submit" class="btn btn-primary">Create Resume</button></center>
			    </form>
				
			</div>
		</div>
	</div>			
<br><br><br>
   <?php include "../includes/footer.php"; ?>
 </body>
</html>  
