<?php 

//Posting New Classify



if($_POST){

include 'configuration.php';



	
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

    if(mysqli_num_rows($result)==1){
echo '<p class="alert alert-danger text-center">You are only allowed One (1) Classified Post. Please delete your old posting <span class="close pull-right"> <a href="#"> X </span></p>';

    }else{
	$query="insert into classify(first_name,last_name,title,contact,article,email,classify_type,post_date,classify_id,location)
	values('$fname','$lname','$title','$contact','$classify','$email','$classify_type',now(),'$id','$location')";
	$result=mysqli_query($dbc,$query);
	if($result){echo '<p class="alert alert-success text-center">Classified Posted Successfully</p>'; 

}else{echo '<p class="alert alert-danger text-center">Something is not right <span class="close pull-right"> <a href="#"> X </span></p>';}	
     
};
}
	



 ?>