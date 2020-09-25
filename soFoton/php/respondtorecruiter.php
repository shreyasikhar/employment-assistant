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
     <div style="background-image: url('g2.jpg');"> 
     
       <center><h1><span class="glyphicon glyphicon-wrench"></span>  Page Under Construction!!!!!<br>
       Will be available soon...</h1></center>
     </div>

    <br><br><br><br>

     <?php include "../includes/footer.php"; ?>
 </body>
</html>  
