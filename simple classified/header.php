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
	<?php
include 'configuration.php' ;
include 'session.php';
include 'session-expire.php';
include 'logout-modal.php'
 ?>

	<div class="navbar">
		<div class="navbar-header">
			
				  <div class="navbar-brand"><img src="images/newlogo-40.png" style="margin-top:-7px"></div>

				  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">

				  		<span class="sr-only">Toggle Navigation</span>
				  		<span class="icon-bar"></span>
				  		<span class="icon-bar"></span>
				  		<span class="icon-bar"></span>

				  	

				  </button>
    
		
			
		</div>

		<div class="collapse navbar-collapse pull-right">
			<ul class="nav navbar-nav">
			<li><a href="index">Home</a></li>
				<li><a href="privacy">Privacy Policy</a></li>
				<?php if(isset($user)): ?>
				<li><a href="user-profile">My Account</a></li>
				<li><a  data-toggle="modal" data-target="#logout" href="#" >Log Out</a></li>
            
			<?php else: ?>
				<li><a href="login">Login</a></li>
				<li><a href="register">Register</a></li>
			<?php endif; ?>
			</ul>
			

		</div>

	</div>



