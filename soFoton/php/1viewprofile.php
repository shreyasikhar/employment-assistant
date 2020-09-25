<?php
require "../includes/common.php";
//if(!isset($_SESSION['email']))
 //   header('location:../../index.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Employment Assistant</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png" size="16*16">
           Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        jQuery library
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        Latest compiled and minified JavaScript
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
	.column_style{
		border:1px solid #000;
		}
	</style>
	</head>
 <body>
	
 <?php include "../includes/header.php";?>

   //  <br><br><br><br><br><br>

        <?php
        $email=$_SESSION['email'];
        $sq = "select * from resume where email='$email' ";
        $sq_result = mysqli_query($con,$sq) or die(mysqli_error($con));
        $row = mysqli_fetch_array($sq_result);
        ?>
         <div class="container column_style">
         
         <div class="row">
          <div class="col-lg-4 column_style">
			Name :
		  </div>
            <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['name']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Email :
          </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['email']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Mobile :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['mobile']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			City :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['city']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Degree :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['degree']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Stream :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['stream']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			EndYear :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['endYear']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Degree Status :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['degreeStatus']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			College Name :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['collegeName']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			CGPA :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['cgpa']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Job :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['job']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Internship :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['internship']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Training :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['training']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Projects :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['project']; ?>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 column_style">
			Skills :
		  </div>
          <div class="col-lg-4 col-lg-offset-2 column_style">
             <? php echo $row['skills']; ?>
            </div>
          </div> 
          
        </div>   
       <br><br><br>
   <?php include "../includes/footer.php"; ?>
 </body>
</html>  
