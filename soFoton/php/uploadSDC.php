<?php
	require '../includes/common.php';
    if((!isset($_SESSION['email'])) || (($_SESSION['type'] != 'recruiter')))
        header('location:login.php');
        
        
    //**********validation******************
	$emailErr = $skillErr = $downloadContentErr = "";
    $email = $skill = $downloadContent = "";
    $flag=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $flag=1;
        if (empty($_POST["email"])) 
        {
            $emailErr = "* Email is required";
            $flag=0;
        } 
        else 
        {
            $email = $_POST["email"];
        }
        if (empty($_POST["Skill"])) 
        {
            $skillErr = "* Name of Course is required";
            $flag=0;
        } 
        else 
        {
            $skill = $_POST["Skill"];
        }
        if (empty($_POST["DownloadContent"])) 
        {
            $downloadContentErr = "* Course File is required";
            $flag=0;
        } 
        else 
        {
            $downloadContent = $_POST["DownloadContent"];
        }
    }
    
    $email=mysqli_real_escape_string($con, $email);
	$skill=mysqli_real_escape_string($con, $skill);
	$downloadContent=mysqli_real_escape_string($con, $downloadContent);
	if($flag)
	{
	  $sq="insert into skill(email, Skill, DownloadContent) values ('$email', '$skill', '$downloadContent')";
	  $sqr=mysqli_query($con, $sq) or die(mysqli_error($con));
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
		<div class="container">
		<div class="row">
			<div class="cont cont col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Add Courses</center></div>
					<div class="panel-body">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
								<span class="error"><?php echo $emailErr;?></span>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="Skill" id="Skill" placeholder="Enter Name of Course">
								<span class="error"><?php echo $skillErr;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="DownloadContent" id="DownloadContent" placeholder="Add Link">
								<span class="error"><?php echo $downloadContentErr;?></span>
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Add</button></center>
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