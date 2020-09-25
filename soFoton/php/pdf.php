<!DOCTYPE HTML>
<html>
	<head>
		<title>Lifestyle Store</title>	
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
		<div class="row">
			<div class="cont col-xs-4 col-xs-offset-4">
				<h2>Sign Up</h2>
				<form method="POST" action="pdf_submit.php">
					<div class="form-group">
						<input type="text" class="form-control" name="name" id="name" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>	
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="contact" id="contact" placeholder="Contact">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city"  placeholder="City">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" id="address" placeholder="Address">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
</body>
</html>