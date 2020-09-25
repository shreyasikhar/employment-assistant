<?php
	require '../includes/common.php';
    if((!isset($_SESSION['email'])) || (($_SESSION['type'] != 'recruiter')))
        header('location:login.php');
        
        
    //**********validation******************
	$questionErr = $option1Err = $option2Err = $option3Err = $option4Err = $answerErr = "";
    $question = $option1 = $option2 = $option3 = $option4 = $answer = $rating = "";
    $flag=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $flag=1;
        if (empty($_POST["question"])) 
        {
            $questionErr = "* Question is required";
            $flag=0;
        } 
        else 
        {
            $question = $_POST["question"];
        }
        if (empty($_POST["option1"])) 
        {
            $option1Err = "* Option 1 is required";
            $flag=0;
        } 
        else 
        {
            $option1 = $_POST["option1"];
        }
        if (empty($_POST["option2"])) 
        {
            $option2Err = "* Option 2 is required";
            $flag=0;
        } 
        else 
        {
            $option2 = $_POST["option2"];
        }if (empty($_POST["option3"])) 
        {
            $option3Err = "* Option 3 is required";
            $flag=0;
        } 
        else 
        {
            $option3 = $_POST["option3"];
        }if (empty($_POST["option4"])) 
        {
            $option4Err = "* Option 4 is required";
            $flag=0;
        } 
        else 
        {
            $option4 = $_POST["option4"];
        }
        if (empty($_POST["answer"])) 
        {
            $answerErr = "* Answer is required";
            $flag=0;
        } 
        else 
        {
            $answer = $_POST["answer"];
        }
    }
    
    $question=mysqli_real_escape_string($con, $question);
	$option1=mysqli_real_escape_string($con, $option1);
	$option2=mysqli_real_escape_string($con, $option2);
	$option3=mysqli_real_escape_string($con, $option3);
	$option4=mysqli_real_escape_string($con, $option4);
	$answer=mysqli_real_escape_string($con, $answer);
	$rating = 0;
	if($flag)
	{
	  $sq="insert into addQuestion(question, option1, option2, option3, option4, answer, rating) values ('$question', '$option1', '$option2', '$option3', '$option4', '$answer', '$rating')";
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
		<link rel="stylesheet" type="text/css" href="../css/stylo.css">
				<link rel="stylesheet" text="text/css" href="sty.css"/>

	</head>
	<body> 
		<?php include "../includes/header.php";?>
		<div class="container" >
		<div class="row">
			<div class="cont cont col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Add Question</center></div>
					<div class="panel-body">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<input type="text" class="form-control" name="question" id="question" placeholder="Enter Question">
								<span class="error"><?php echo $questionErr;?></span>
							</div>
                            <div class="form-group">
								<input type="text" class="form-control" name="option1" id="option1" placeholder="Enter Option 1">
								<span class="error"><?php echo $option1Err;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="option2" id="option2" placeholder="Enter Option 2">
								<span class="error"><?php echo $option2Err;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="option3" id="option3" placeholder="Enter Option 3">
								<span class="error"><?php echo $option3Err;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="option4" id="option4" placeholder="Enter Option 4">
								<span class="error"><?php echo $option4Err;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="answer" id="answer" placeholder="Enter Answer">
								<span class="error"><?php echo $answerErr;?></span>
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
