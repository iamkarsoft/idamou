<!doctype>
	<html lang="en">
	<head>
		<meta charset="uft-8">

		<title>Idamou Portal</title>
		<link rel="stylesheet" type="text/css" href="">

  <link href="images/idamou.ico" rel="shortcut icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
	</head>
	<body>


<div class="container">
		<div class="col-md-offset-4 col-md-4 form-icon">
				<img src="images/newlogo-150.png" class="center-block">

				<div class="error">
					<?php include 'functions/reset-pass.php' ?>
					
				</div>
		</div>

	    <div class="col-md-offset-4 col-md-4 login-form">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
				
					
					<div class="form-group col-md-12">
			     	<input type="password" class="form-control" autofocus name="password" placeholder="New Password" required>
					</div>
					
					<div class="form-group col-md-12">
				
					<input type="password" name="password-confirm" class="form-control" placeholder="Confirm Password"/>
            
					<br>
					<input type="submit" class="btn btn-primary" value="Save">
					
					</div>
					
					
				
			
				</form><!-- end of sign up form --> <!-- end of sign up form -->


				<p><a href="">Lost Password</a></p>
	 			<p><a href="index">Back to Idamou</a></p>
		
	    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/custom.js"></script>





 
  </body>
  </html>