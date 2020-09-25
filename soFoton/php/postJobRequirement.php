<?php
	require '../includes/common.php';
    if((!isset($_SESSION['email'])) || (($_SESSION['type'] != 'recruiter')))
        header('location:login.php');
        
        
    //**********validation******************
	$companyErr = $addressErr = $emailErr = $qualificationErr = $skillsErr = $experienceErr = "";
    $company = $address = $email = $qualification = $skills = $experience = "";
    $flag=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $flag=1;
        if (empty($_POST["company"])) 
        {
            $companyErr = "* Company Name is required";
            $flag=0;
        } 
        else 
        {
            $company = $_POST["company"];
        }
        if (empty($_POST["address"])) 
        {
            $addressErr = "* Company Address is required";
            $flag=0;
        } 
        else 
        {
            $address = $_POST["address"];
        }
        if (empty($_POST["email"])) 
        {
            $emailErr = "* Email is required";
            $flag=0;
        } 
        else 
        {
            $email = $_POST["email"];
        }
        if (empty($_POST["qualification"])) 
        {
            $qualificationErr = "* Qualification is required";
            $flag=0;
        } 
        else 
        {
            $qualification = $_POST["qualification"];
        }
        if (empty($_POST["skills"])) 
        {
            $skillsErr = "* Skills are required";
            $flag=0;
        } 
        else 
        {
            $skills = $_POST["skills"];
        }
        if (empty($_POST["experience"])) 
        {
            $experienceErr = "* Experience is required";
            $flag=0;
        } 
        else 
        {
            $experience = $_POST["experience"];
        }
    }
    
    $company=mysqli_real_escape_string($con, $company);
	$address=mysqli_real_escape_string($con, $address);
	$email=mysqli_real_escape_string($con, $email);
	$qualification=mysqli_real_escape_string($con, $qualification);
	$skills=mysqli_real_escape_string($con, $skills);
	$experience=mysqli_real_escape_string($con, $experience);
	if($flag)
	{
	  $sq="insert into requirement(company, address, email, qualification, skills, experience) values ('$company', '$address', '$email', '$qualification', '$skills', '$experience')";
	  $sqr=mysqli_query($con, $sq) or die(mysqli_error($con));
	  header('location:addQuestions.php');
	}
?>    
<!DOCTYPE HTML>
<html>
	<head>
		<title>Employment Assistant</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png">
		<!-- Latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- Latest compiled and minified javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" text="text/css" href="sty.css"/>

	</head>
	<body> 
		<?php include "../includes/header.php";?>
		<div class="container" >
		<div class="row">
			<div class="cont cont col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Enter Requirement</center></div>
					<div class="panel-body">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<input type="text" class="form-control" name="company" id="company" placeholder="Enter Company Name">
								<span class="error"><?php echo $companyErr;?></span>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="address" id="address" placeholder="Enter Company Address">
								<span class="error"><?php echo $addressErr;?></span>
							</div>
							
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Email">
								<span class="error"><?php echo $emailErr;?></span>
							</div>
	  				        <div class="form-group">
								<input type="text" class="form-control" name="qualification" id="qualification" placeholder="Enter Qualification">
								<span class="error"><?php echo $qualificationErr;?></span>
							</div>
	  						<!-- <div class ="form-group form-control">
								<label >Select Category : </label>
								<select name="category">
	    							<option value="OPEN">OPEN</option>
	    							<option value="OBC">OBC</option>
	    							<option value="SC">SC</option>
	    							<option value="ST">ST</option>
	    							<option value="NT">NT</option>
	    							<option value="VJ">VJ</option>
	  							</select>
	  						</div>
	  						<div class ="form-group form-control">
								<label >Select Segment : </label>
								<select name="customerSegment">
	    							<option value="Farmer">Farmer</option>
	    							<option value="seniorCitizen">Senior Citizen</option>
	    						</select>	
	  						</div>
	  						<div class ="form-group form-control">
								<label >Select Gender : </label>
								<select name="gender">
	    							<option value="Male">Male</option>
	    							<option value="Female">Female</option>
	    							<option value="Other">Other</option>
	  							</select>
	  						</div> -->
	  						<div class="form-group">
								<input type="text" class="form-control" name="skills" id="skills" placeholder="Enter Skills">
								<span class="error"><?php echo $skillsErr;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="experience" id="experience" placeholder="Enter Experience">
								<span class="error"><?php echo $experienceErr;?></span>
							</div>
							<!-- <div class="form-group">
								<input type="text" class="form-control" name="contact" id="contact" pattern="(7|8|9)\d{9}" placeholder="Enter Contact Number">
								<span class="error"><?php echo $contactErr;?></span>
							</div> -->
							<!-- <div class ="form-group form-control">
								<label >Select Status : </label>
								<select name="status">
	    							<option value="Registered">Registered</option>
	    							<option value="Applied">Applied</option>
	    						</select>	
	  						</div> -->
							<center><button type="submit" class="btn btn-block btn-primary">Next</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		</div>
		<?php include "../includes/footer.php";?>
	</body>
</html>
