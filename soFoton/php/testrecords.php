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
           <!-- Latest compiled and minified CSS  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        		<link rel="stylesheet" text="text/css" href="sty.css"/>

	</head>
 <body>
	
 <?php include "../includes/header.php";?>

    <br><br><br><br>

    <?php
        $email = $_SESSION['email'];
        $sq = "select * from testrecords where email='$email' ";
        $sq_result = mysqli_query($con,$sq) or die(mysqli_error($con));
        //$row = mysqli_fetch_array($sq_result);
        ?>
         
         <div class ="container">
      <div style="background-image: url('g2.jpg');"> 
             <center><h2>Test Records</h2></center>
        <table class="table table-bordered table-hover">
                             <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Date</th>
                                    <th>Test Name</th>
                                    <th>Results</th>
                                </tr>
                            </thead>
                    <tbody>       
                    <?php while($row=mysqli_fetch_array($sq_result)) { ?>        
                                  <tr>
                                     <td><?php echo $row['SrNo'];?></td>
                                     <td> <?php echo $row['Date'];?></td>
                                     <td><?php echo $row['TestName']; ?></td> 
                                     <td><?php echo $row['Results']; ?></td>                                            
                                  </tr>
                                  <?php }?>   

                        </tbody>
           </table>
         </div>
          
   <?php include "../includes/footer.php"; ?>
 </body>
</html>  
