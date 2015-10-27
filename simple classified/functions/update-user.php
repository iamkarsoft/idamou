<?php 

//editing and deleting user



if(@$_REQUEST['operation']=='save'){
		include 'configuration.php';
		@include 'session.php';
		$fname=mysqli_escape_string($dbc,$_POST['fname']);
			$lname=mysqli_escape_string($dbc,$_POST['lname']);

		$contact=$_POST['contact'];
		
			$query= "update users SET contact='$contact' , first_name='$fname', last_name='$lname'  where email='$user'";
			$query2="update classify SET first_name='$fname', last_name='$lname' where email='$user'";
			$result=mysqli_query($dbc,$query);
			$result2=mysqli_query($dbc,$query2);
@header("refresh:4,user-profile");
		echo '<p class="alert alert-success">Profile Updated Successfully <span class="close pull-right"> <a href="#"> X </span></p>
				<script type="javascript">
				$(".alert").alert("close")
				</script>
		';
			
		}elseif(@$_REQUEST['operation']=='delete'){
			@include 'session.php';
		include 'configuration.php';
		$deletecode=md5(rand(0,10000));
		$query="update users set  active=2, delete_code='$deletecode' where email='$user'";

		$result=mysqli_query($dbc,$query);
		echo '<p class="alert alert-warning">Please confirm your idamou account closure in your inbox!! <span class="close pull-right"> <a href="#"> X </span></p>';
		//header("refresh:2,logout");
		

		if($result){

			$to=$user;
			
			//my subject
			$subject="Confirm Account Closure";


			//from
			$header="From: idamou.com";

			//My Message
			$message="Your confirmation link \r\n";
			$message.="click on this link to delete your account\r\n";
			$message.="http://www.idamou.com/classifieds/deletion?deletecode=$deletecode";

			//sending the mail
			$sentmail=mail($to,$subject,$message,$header);
		}

		}




 ?>