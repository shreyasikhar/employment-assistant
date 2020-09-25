<?php
require "../includes/common.php";
if(!isset($_SESSION['email']))
	header('location:../../index.php');

//**********validation******************
$nameErr = $mobileErr = $cityErr = $degreeErr = $streamErr = $endYearErr = $collegeNameErr = $cgpaErr = $jobErr = $internshipErr = $trainingErr = $projectErr = $skillsErr = "";
$name = $mobile = $city = $degree = $stream = $endYear = $degreeStatus = $collegeName = $cgpa = $job = $internship = $training = $project = $skills = "";
$email = $_SESSION["email"];
$sq="select * from resume where email='$email'";
$sqr=mysqli_query($con, $sq) or die(mysqli_error($con));
$row=mysqli_fetch_array($sqr);
$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$flag=1;
	if (empty($_POST["name"])) 
	{
		$nameErr = "* Name is required";
		$flag=0;
	} 
	else 
	{
		$name = $_POST["name"];
	}
	 if (empty($_POST["mobile"])) 
	{
		$mobileErr = "* Mobile No. is required";
		$flag=0;
	} 
	else 
	{
		$mobile = $_POST["mobile"];
	}
	if (empty($_POST["city"])) 
	{
		$cityErr = "* City is required";
		$flag=0;
	} 
	else 
	{
		$city = $_POST["city"];
	}
	if (empty($_POST["degree"])) 
	{
		$degreeErr = "* Degree is required";
		$flag=0;
	} 
	else 
	{
		$degree = $_POST["degree"];
	}
	if (empty($_POST["stream"])) 
	{
		$benefitErr = "* Stream is required";
		$flag=0;
	} 
	else 
	{
		$stream = $_POST["stream"];
	}
	if (empty($_POST["endYear"])) 
	{
		$endYearErr = "* End Year is required";
		$flag=0;
	} 
	else 
	{
		$endYear = $_POST["endYear"];
	}
	
	$degreeStatus = $_POST["degreeStatus"];
	if (empty($_POST["collegeName"])) 
	{
		$collegeNameErr = "* College Name is required";
		$flag=0;
	} 
	else 
	{
		$collegeName = $_POST["collegeName"];
	}if (empty($_POST["cgpa"])) 
	{
		$cgpaErr = "* CGPA is required";
		$flag=0;
	} 
	else 
	{
		$cgpa = $_POST["cgpa"];
	}
	$job = $_POST["job"];
	$internship = $_POST["internship"];
	$training = $_POST["training"];
	$project = $_POST["project"];
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


$name=mysqli_real_escape_string($con, $name);
$mobile=mysqli_real_escape_string($con, $mobile);
$city=mysqli_real_escape_string($con, $city);
$degree=mysqli_real_escape_string($con, $degree);
$stream=mysqli_real_escape_string($con, $stream);
$endYear=mysqli_real_escape_string($con, $endYear);
$degreeStatus=mysqli_real_escape_string($con, $degreeStatus);
$collegeName=mysqli_real_escape_string($con, $collegeName);
$cgpa=mysqli_real_escape_string($con, $cgpa);
$job=mysqli_real_escape_string($con, $job);
$internship=mysqli_real_escape_string($con, $internship);
$training=mysqli_real_escape_string($con, $training);
$project=mysqli_real_escape_string($con, $project);
$skills=mysqli_real_escape_string($con, $skills);
if($flag)
{ 
	$uq1="update resume set name='$name', mobile='$mobile', city='$city', degree='$degree', stream='$stream', endYear='$endYear', degreeStatus='$degreeStatus', collegeName='$collegeName', cgpa='$cgpa', job='$job', internship='$internship', training='$training', project='$project', skills='$skills' where email ='$email'";
	$uqr1=mysqli_query($con, $uq1) or die(mysqli_error($con));
	require "fpdf/fpdf.php";
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->setFont("Arial", "B", 18);                 
	$pdf->cell(0, 20, "{$name}", 1, 1, "C");           
	$pdf->cell(60, 10, "  name : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$name}", 1, 1, "C");
	$pdf->cell(60, 10, "  email : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$email}", 1, 1, "C");
	$pdf->cell(60, 10, "  city : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$city}", 1, 1, "C");
	$pdf->cell(60, 10, "  degree : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$degree}", 1, 1, "C");
	$pdf->cell(60, 10, "  stream : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$stream}", 1, 1, "C");
	$pdf->cell(60, 10, "  endYear : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$endYear}", 1, 1, "C");
	$pdf->cell(60, 10, "  degreeeStatus : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$degreeStatus}", 1, 1, "C");
	$pdf->cell(60, 10, "  collegeName : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$collegeName}", 1, 1, "C");
	$pdf->cell(60, 10, "  cgpa : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$cgpa}", 1, 1, "C");
	$pdf->cell(60, 10, "  job : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$job}", 1, 1, "C");
	$pdf->cell(60, 10, "  internship : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$internship}", 1, 1, "C");
	$pdf->cell(60, 10, "  training : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$training}", 1, 1, "C");
	$pdf->cell(60, 10, "  project : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$project}", 1, 1, "C");
	$pdf->cell(60, 10, "  skills : ", 1, 0, "L");
	$pdf->cell(130, 10, "{$skills}", 1, 1, "C");
	$pdf->Output();
  
	header('location:viewprofile.php');
}
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
				<div class="panel-heading"><h3><center>Update Resume</center></h3></div>
				<div class="panel-body">
			 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="form-group">
				<label for="name"></label>
				 <input type="text" class="form-control" name="name" value='<?php echo $row["name"]; ?>'>
			    </div>
			    <!-- <div class="form-group">
				<label for="email"></label><br>
				 <input type="email" class="form-control" name="email" value='<?php //echo $row["email"]; ?>'>
			    </div> -->
			     <div class="form-group">
				<label for="mobile"></label><br>
				 <input type="bigint" class="form-control" name="mobile" value='<?php echo $row["mobile"]; ?>'>
			    </div>
                <div class="form-group">
				<label for="city"></label>
				 <input type="text" class="form-control" name="city" value='<?php echo $row["city"]; ?>'>
			    </div>
				 <div class="form-group">
				<label for="degree"></label><br>
				 <input type="text" class="form-control" name="degree" value='<?php echo $row["degree"]; ?>'>
			    </div>
				 <div class="form-group">
				<label for="stream"></label><br>
				 <input type="text" class="form-control" name="stream" value='<?php echo $row["stream"]; ?>'>
			    </div>
                <div class="form-group">
				<label for="endYear"></label><br>
				 <input type="text" class="form-control" name="endYear" value='<?php echo $row["endYear"]; ?>'>
			    </div>
                <div class ="form-group form-control">
					<label >Select Degree Status</label>
					<select name="degreeStatus" >
						<option value='<?php echo $row["degreeStatus"]; ?>' selected="selected"><?php echo $row['degreeStatus']; ?></option>
						<option value="pursuing">Pursuing</option>
						<option value="completed">Completed</option>
					</select>
				</div>
				<div class="form-group">
				<label for="collegeName"></label><br>
				 <input type="text" class="form-control" name="collegeName" value='<?php echo $row["collegeName"]; ?>'>
			    </div>
				<div class="form-group">
				<label for="cgpa"></label><br>
				 <input type="float" class="form-control" name="cgpa" value='<?php echo $row["cgpa"]; ?>'>
			    </div>
				<div class="form-group">
				<label for="job"></label><br>
				 <input type="mediumtext" class="form-control" name="job" value='<?php echo $row["job"]; ?>'>
			    </div>
				<div class="form-group">
				<label for="internship"></label><br>
				 <input type="mediumtext" class="form-control" name="internship" value='<?php echo $row["internship"]; ?>'>
			    </div>
				<div class="form-group">
				<label for="training"></label><br>
				 <input type="mediumtext" class="form-control" name="training" value='<?php echo $row["training"]; ?>'>
			    </div>
				<div class="form-group">
				<label for="project"></label><br>
				 <input type="mediumtext" class="form-control" name="project" value='<?php echo $row["project"]; ?>'>
			    </div>
				<div class="form-group">
				<label for="skills"></label><br>
				 <input type="mediumtext" class="form-control" name="skills" value='<?php echo $row["skills"]; ?>'>
			    </div>
 			   <center><button type="submit" class="btn btn-primary">Update Resume</button></center>
			    </form>
				
			</div>
		</div>
		<br/><br/>
	</div>			
<br/><br/><br/>
   <?php include "../includes/footer.php"; ?>
 </body>
</html>  
