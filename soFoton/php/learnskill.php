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
           <!--Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        		<link rel="stylesheet" text="text/css" href="sty.css"/>

	</head>
 <body>
		<?php include"../includes/header.php";?>
  

    <br><br><br><br><br><br>

        <?php
        $sq="select * from skill ";
        $sqr=mysqli_query($con,$sq);
        $count=0;
        if(mysqli_num_rows($sqr)>=0)
        { ?>
       
 
 <div class ="container">
     <div class="panel">
         <div style="background-image: url('g2.jpg');"> 
     <center><h2>Learn New Skills</h2></center>
    <table class="table table-bordered table-hover">
                             <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Skills</th>
                                    <th>Download Content</th>
                                </tr>
                            </thead>
                    <tbody>       
        <?php while($row=mysqli_fetch_array($sqr)) { ?>
                     
                           <tr>
                                              <td><?php echo$row['SrNo'];?></td>
                                              <td> <?php echo$row['Skill'];?> </td>
                                              <td><a href='<?php echo$row['DownloadContent'];?>' class='text-info' target='_blank'> <?php echo$row['DownloadContent'];?></a></td>
                                              
                                          </tr>
                             <?php }?>                             
                            
                                         




                    <?php }?>
                            </tbody>
      </table>
      </div>
     </div>
    </div> 
 

   <?php include "../includes/footer.php"; ?>
 </body>
</html>  
