<?php 

//Posting New Classify


include 'configuration.php';

if($_POST){




	$email=mysqli_escape_string($dbc,$_POST['email']);
	$fname=mysqli_escape_string($dbc,$_POST['fname']);
$lname=mysqli_escape_string($dbc,$_POST['lname']);
$email=mysqli_escape_string($dbc,$_POST['email']);
	$contact=mysqli_escape_string($dbc,$_POST['contact']);
	$title=mysqli_escape_string($dbc,$_POST['title']);
	$classify_type=mysqli_escape_string($dbc,$_POST['classify_type']);
	$classify=mysqli_escape_string($dbc,$_POST['classify']);
	$location=mysqli_escape_string($dbc,$_POST['location']);
    $id=md5(uniqid(rand()));

    $query="select * from classify where email='$email'";
    $result=mysqli_query($dbc,$query);

  
	$query="insert into classify(first_name,last_name,title,contact,article,email,classify_type,post_date,classify_id,location)
	values('$fname','$lname','$title','$contact','$classify','$email','$classify_type',now(),'$id','$location')";
	$result=mysqli_query($dbc,$query);
	if(isset($_POST)){echo '<p class="alert alert-success text-center">Classified Posted Successfully <span class="close pull-right"> <a href="#"> X </span></p>'; 
header("location:user-profile");}else{echo '<p class="alert alert-danger text-center">Something is not right <span class="close pull-right"> <a href="#"> X </span></p>';}	
     }

	



 ?>