<?php
	//index.php for D2D
    require 'soFoton/includes/common.php';
    if(isset($_SESSION['email']))
    {
        if($_SESSION['type'] == "recruiter")
            header('location:soFoton/php/recruiter.php');
        else if($_SESSION['type'] == "candidate")
            header('location:soFoton/php/candidate.php');
    } 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Employment Assistant</title>	
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="soFoton/css/index.css">
        <link rel="icon" type="image/css" href="soFoton/img/d2dlogo.png" size="16*16">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="9yHMpL8dY3UeZg3LCsDej8bnwNmJVhhS872erVj140A" />
	</head>
	<body>
		<?php
			include 'soFoton/includes/header.php';
		?>	
		<div id="banner_image">
			<div class="container">
				<center>
					<div id="banner_content">
					<h1>Employment Assistant</h1>
				</br>
				
Employment Assistant gives a common platform to the recruiters and candidates. It recommends potential candidates to the recruiters. By using this application, candidates will identify and analyse their skill sets.					
					</div>
				</center>
			</div>
		</div>
		<?php
			include 'soFoton/includes/footer.php';
		?>	
	</body>
</html>
