<?php
	require '../includes/common.php';
	if(isset($_SESSION['email']))
    {
        if($_SESSION['type']=="recruiter")
            header('location:recruiter.php');
        else if($_SESSION['type']=="candidate")
            header('location:candidate.php');
    }
    
    //***********validation***********
    $emailErr = $passwordErr = "";
    $email = $type = $password = "";
    $flag = 0;
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $flag = 1;
        if (empty($_POST["email"])) 
        {
            $emailErr="* Email is required";   
            $flag =0;
        }
        else 
        {
            $email = $_POST["email"];
        }
        $type=$_POST["type"];
        if (empty($_POST["password"])) 
        {
            $passwordErr = "* Password is required";
            $flag = 0;
        } 
        else 
        {
            $password = md5($_POST["password"]);
        }
    }
?>
<?php 
if($flag)
{
    $sq="select srno, email, type from user where email='$email' and password='$password' and type='$type'";
    $sqr=mysqli_query($con,$sq) or die(mysqli_error($con));
	$row=mysqli_fetch_array($sqr);
 	$_SESSION['email']=$row['email'];
 	$_SESSION['srno']=$row['srno'];
 	$_SESSION['type']=$row['type'];
	if($row["type"]=="recruiter")
	   header('location: recruiter.php');
	else if($row["type"]=="candidate")
	   header('location: candidate.php');
}	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Employment Assistant</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<!-- Latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- Latest compiled and minified javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" type="image/css" href="../img/d2dlogo.png" size="16*16">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" text="text/css" href="sty.css"/>
	</head>
	<body> 
		<?php include "../includes/header.php";?>
		<div class="cont container" >
		<div class="row">
			<div class="cont col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>LOGIN</center></div>
					<div class="panel-body">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class ="form-group form-control">
								<label >Login As: </label>
								<select name="type">
	    							<option value="recruiter">Recruiter</option>
	    							<option value="candidate">Candidate</option>
	  							</select>
	  						</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Email ID">
							    <span class="error"><?php echo $emailErr;?></span>
							</div>	
							<div class="form-group">
								<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password" id="password" placeholder="Enter Password">
							    <span class="error"><?php echo $passwordErr;?></span>
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Login</button></center>
						</form>
						<?php 
						    if($email !== "" && $password !== "")
						    {
    						    $sq="select srno, email, type from user where email='$email' and password='$password' and type='$type'";
                                $sqr=mysqli_query($con,$sq) or die(mysqli_error($con));
                                $row=mysqli_fetch_array($sqr);
                                if(mysqli_num_rows($sqr) == 0)
                                    echo "<span class='error'>Wrong Credentials Entered</span>";
						    }
						?>
					</div>
					<div class="panel-footer"><a href="forgot.php">Forgot Password?</a></div>
				</div>
			</div>
		</div>
		</div>
		<?php include "../includes/footer.php";?>
	</body>
</html>
