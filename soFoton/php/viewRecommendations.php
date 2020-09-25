<?php
require '../includes/common.php';
    if((!isset($_SESSION['email'])) || (($_SESSION['type'] != 'recruiter')))
        header('location:login.php');
?>
<!DOCTYPE HTML>
<html>
		<head>
		<title>Employment Assessment</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png" size="16*16">
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        		<link rel="stylesheet" text="text/css" href="sty.css"/>

	</head>
<body>
	<?php include "../includes/header.php";?>
	<br/><br/><br/>
	<div class="container">
 	<?php
 $sq="select name, email from user where type='candidate'";
 $sqr=mysqli_query($con,$sq);
 $count=0;
 if(!mysqli_num_rows($sqr))
 {
?> 	
<div class="alert alert-warning">
	NO entries Yet!!!.
</div>
<?php }else{ ?>
<div style="background-image: url('g2.jpg');"> 
	<div class="jumbotron">
	    
		<center><h2>View Recommendations</h2></center>
	</div>	
	<div class="row">
		<div class="container col-xs-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Sr. No.</th>
						<th>Applicant's Name</th>
						<th>Applicant's Email</th>
						<!--<th>View Resume</th>-->
					</tr>
				</thead>
				<tbody>
<?php while($row=mysqli_fetch_array($sqr)) { ?>
					<tr>
						<td><?php $count=$count+1; echo$count; ?></td>
						<td><?php echo$row['name'];?></td>
						<td><?php echo$row['email'];?></td>
						<!--<td><?php //echo$row['resume'] ?></td>-->
					</tr>
<?php }?>
				</tbody>
			</table>
			</div>
		</div><br/><br/><br/>
	<?php }?>
	</div>
	</div>
				<?php include "../includes/footer.php"; ?>
</body>
</html>
