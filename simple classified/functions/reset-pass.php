<?php 

	//setting new password
	
		if($_POST){
			$userid=$_GET['userid'];

		$password=mysqli_escape_string($dbc,md5(md5($_POST['password'])));
		$confpassword=mysqli_escape_string($dbc,md5(md5($_POST['password-confirm'])));

		if($password=="" and $confpassword==""){

			echo '<p class="alert alert-danger">Please fill the boxes</p>';
		}elseif($password!=$confpassword){
			echo '<p class="alert alert-danger">Passwords don\'t match</p>';
		}else{

			$query="update users SET password='$password' where user_id='$userid'";
			$result=mysqli_query($dbc,$query);

			echo '<p class="alert alert-success">Your new password has been saved. kindly <a href="signin">Login</a> <span class="close pull-right"> <a href="#"> X </span></p>';
		}
	}





 ?>