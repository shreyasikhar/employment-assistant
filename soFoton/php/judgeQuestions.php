<?php
	require '../includes/common.php';
    if((!isset($_SESSION['email'])) || (($_SESSION['type'] != 'recruiter')))
        header('location:login.php');
        
        
    //**********validation******************
	$ratingErr = "";
    $rating = "";
    $flag=0;
    global $cnt;
    $i = 0;
    $question;
    
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
				<div class="cont col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading"><center>Judge Question</center></div>
						<div class="panel-body">
						<?php
							$sq="select id, question, option1, option2, option3, option4 from cAddQuestion";
							$sqr=mysqli_query($con, $sq) or die(mysqli_error($con));
							$row=mysqli_fetch_array($sqr);
                            $cnt=$cnt+1; 
                        ?>    
                           <b><?php echo "Q.".$cnt; ?></b>
                           
						<b><?php echo  $row['question'];?></b><br><hr>
						<div><B>Option 1</B></div><?php  echo "   ".$row['option1']; ?>
						<div><B>Option 2</B></div><?php echo "   ".$row['option2'];?>
						<div><B>Option 3</B></div><?php echo "   ".$row['option3'];?>
						<div><B>Option 4</B></div><?php echo "   ".$row['option4'] ?>
                        <?php $count = $_GET['count']; ?>
						<form method="post" action="judgeQuestionsScript.php?count=<?php echo $count; ?>">
							<div class ="form-group form-control">
								<label >Select Rating : (0 to 10) 0: Worst Rating, 10: Best Rating </label>
								<select name="rating">
	    							<option value="10">10</option>
	    							<option value="9">9</option>
	    							<option value="8">8</option>
	    							<option value="7">7</option>
	    							<option value="6">6</option>
	    							<option value="5">5</option>
	    							<option value="4">4</option>
	    							<option value="3">3</option>
	    							<option value="2">2</option>
	    							<option value="1">1</option>
	    							<option value="0">0</option>
	  							</select>
	  						</div>
						<br>
						<!-- <center><button type="submit" class="btn btn-block btn-primary">Submit</button></center> -->
                       <center><button type="submit" class="btn btn-block"><h4>Next</h4></a></button></center>
						</form>
					<?php	
					// if($flag)
					// {
					//   $sq1 ="select rating from addQuestion where question = '$question'";
					//   $sqr1=mysqli_query($con, $sq1) or die(mysqli_error($con));
					//   $row = mysqli_fetch_array($sqr1);
					//   $old_rating = $row['rating'];
					//   $rating = $rating + $old_rating;
					//   $iq = "update addQuestion set rating = '$rating' where question ='$question'";
					//   $iqr=mysqli_query($con, $iq) or die(mysqli_error($con));
					// }
					?>
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
