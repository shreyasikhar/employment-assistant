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

   //  <br><br><br><br>

        <?php
        $email = $_SESSION['email'];
        $sq = "select * from resume where email='$email' ";
        $sq_result = mysqli_query($con,$sq) or die(mysqli_error($con));
        $row = mysqli_fetch_array($sq_result);
        ?>
         
         <div class ="container">
             <div style="background-image: url('g2.jpg');"> 
            <div class="jumbotron" style="background-color:#82f7afb8;">
		<center><h2>PROFILE</h2></center>
	</div>
    <table class="table table-bordered table-hover table-sm">
                             <thead>
                                <!--<tr>-->
                                    
                                   <!--<th>  </th>-->
                                    <!--<th>  </th>-->
                               <!--</tr>-->
                            </thead>
                    <tbody>       
                         
                                  <tr>
                                    
                                     <td> Name : </td>
                                     <td><?php echo $row['name']; ?></td>                                             
                                  </tr>

                                  <tr>
                                   
                                     <td> Email: </td>
                                     <td><?php echo $row['email']; ?></td>                                             
                                  </tr>

                                  <tr>
                                 
                                     <td> Mobile : </td>
                                     <td><?php echo $row['mobile']; ?></td>                                             
                                  </tr>

                                  <tr>
                                    
                                     <td> City : </td>
                                     <td><?php echo $row['city']; ?></td>                                             
                                  </tr>

                                  <tr>
                                   
                                     <td> Degree : </td>
                                     <td><?php echo $row['degree']; ?></td>                                             
                                  </tr>

                                  <tr>
                                     
                                     <td> Stream : </td>
                                     <td><?php echo $row['stream']; ?></td>                                             
                                  </tr>

                                  <tr>
                                    
                                     <td> Endyear : </td>
                                     <td><?php echo $row['endYear']; ?></td>                                             
                                  </tr>

                                  <tr>
                                     
                                     <td> DegreeStatus : </td>
                                     <td><?php echo $row['degreeStatus']; ?></td>                                             
                                  </tr>

                                  <tr>
                                     
                                     <td> CollegeName : </td>
                                     <td><?php echo $row['collegeName']; ?></td>                                             
                                  </tr>

                                  <tr>
                                     
                                     <td> CGPA : </td>
                                     <td><?php echo $row['cgpa']; ?></td>                                             
                                  </tr>

                                  <tr>
                                   
                                     <td> Job : </td>
                                     <td><?php echo $row['job']; ?></td>                                             
                                  </tr>

                                  <tr>
                                   
                                     <td> Internship : </td>
                                     <td><?php echo $row['internship']; ?></td>                                             
                                  </tr>

                                  <tr>
                                    
                                     <td> Training : </td>
                                     <td><?php echo $row['training']; ?></td>                                             
                                  </tr>

                                  <tr>
                                    
                                     <td> Project : </td>
                                     <td><?php echo $row['project']; ?></td>                                             
                                  </tr>

                                  <tr>
                                     
                                     <td> Skills : </td>
                                     <td><?php echo $row['skills']; ?></td>                                             
                                  </tr>

             </tbody>
          </table>
         </div> 
         
         
       
          
          
       <br><br><br>
     <?php include "../includes/footer.php"; ?>
 </body>
</html>  
