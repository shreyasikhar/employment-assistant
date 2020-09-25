<?php 
require "../includes/common.php";
if(!isset($_SESSION['email']))
    header('location:../../index.php'); 
$passwordErr = $newpassword1Err = $newpassword2Err = $mismatchErr = $wrongpasswordErr = $samepasswordErr = "";
$pass = $pass1 = $pass2 ="";
$flag=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $flag=1;
    $srno=$_SESSION['srno'];
    if (empty($_POST["password"])) 
    {
        $passwordErr = "* Old Password is required";
        $flag=0;
    } 
    else 
    {
        $pass = md5($_POST["password"]);
    }
    if (empty($_POST["newpassword1"])) 
    {
        $newpassword1Err = "* New Password is required";
        $flag=0;
    } 
    else 
    {
        $pass1 = md5($_POST["newpassword1"]);
    }
    if (empty($_POST["newpassword2"])) 
    {
        $newpassword2Err = "* New Password is required";
        $flag=0;
    } 
    else 
    {
        $pass2 = md5($_POST["newpassword2"]);
    }
    if($pass1 !== $pass2)
    {
        $mismatchErr="* New passwords don't match!!!";
        $flag=0;
    }
    if($pass == $pass1 && $pass == $pass2 && $pass !== "")
    {
        $samepasswordErr="* Both Old and New Password should not be same";
        $flag=0;
    }
    $sq="select * from user where srno='$srno' and password='$pass'";
    $sqr=mysqli_query($con,$sq);
    if(!mysqli_num_rows($sqr) && $pass !== "")
    {
        $wrongpasswordErr = "* Wrong Password Entered"; 
        $flag=0;
    }
}        

if($flag)
{
    $sq="select * from user where srno='$srno' and password='$pass'";
    $sqr=mysqli_query($con,$sq);
    if(mysqli_num_rows($sqr))
    {
        $cp="update user set password = '$pass1' where srno = '$srno'";
        $cpr=mysqli_query($con,$cp);
        header('location:../../index.php');
    }
}    
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Employment Assistant</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/css" href="../img/d2dlogo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        		<link rel="stylesheet" text="text/css" href="sty.css"/>

	</head>
<body>
	<?php include"../includes/header.php";?>
		<div class="cont container">
		<div class="row ">
			<div class="cont col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
			    <div class="panel panel-primary">
					<div class="panel-heading"><center>Change Password</center></div>
					<div class="panel-body">
				<h2></h2>
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Old Password">
						<span class="error"><?php echo $passwordErr; ?></span>
						<span class="error"><?php echo $wrongpasswordErr; ?></span>	
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="newpassword1" placeholder="New Password">
						<span class="error"><?php echo $newpassword1Err; ?></span>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="newpassword2" placeholder="Re-enter New Password">
                        <span class="error"><?php echo $newpassword2Err; ?></span>
                        <span class="error"><?php echo $mismatchErr; ?></span>
                        <span class="error"><?php echo $samepasswordErr; ?></span>
					</div>
					<div class="form-group">
						<center><button type="submit" class="btn btn-block btn-primary">Change</button></center>
					</div>
				</form>
			</div>
			</div>
			</div>
		</div>
		</div>
		<?php include"../includes/footer.php"; ?>
</body>
</html>