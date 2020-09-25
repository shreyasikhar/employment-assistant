<?php
	require '../includes/common.php';
    if((!isset($_SESSION['email'])) || (($_SESSION['type'] != 'candidate')))
        header('location:login.php');
        
        
    //**********validation******************
	$resumeErr = "";
    $email = "";
    $flag=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
			$filename = $_FILES['resume']['name'];
			$tempfilename = $_FILES['resume']['tmp_name'];
			//move_uploaded_file($tempfilename, "files/$filename");
			$destination_path = getcwd().DIRECTORY_SEPARATOR;
			$target_path = $destination_path . 'files/'. basename( $_FILES["resume"]["name"]);
			move_uploaded_file($_FILES['resume']['tmp_name'], $target_path);
			$email = $_SESSION['email'];	
        	  $iq="update resume set resume='$filename' where email='$email'";
        	  $iqr=mysqli_query($con, $iq) or die(mysqli_error($con));
    }
	//$resume=mysqli_real_escape_string($con, $resume);
	  
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
					<div class="panel-heading"><center>Upload Resume</center></div>
					<div class="panel-body">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" class="form-control" accept="application/pdf" name="resume" id="resume" required="required">
								<span class="error"><?php echo $resumeErr;?></span>
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Upload</button></center>
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
</html>.