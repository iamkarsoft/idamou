<?php 

//Posting New Classify


include 'configuration.php';


$page=$_GET['page'];
$title=$_GET['cid'];
// selecting specific classify
$query="select * from classify where classify_id='$title'";
$result=mysqli_query($dbc,$query);
$row=mysqli_fetch_array($result);


if($_POST){


// 	$fname=mysqli_escape_string($dbc,$_POST['fname']);
// $lname=mysqli_escape_string($dbc,$_POST['lname']);
// $email=mysqli_escape_string($dbc,$_POST['email']);
	$contact=mysqli_escape_string($dbc,$_POST['contact']);
	$title=mysqli_escape_string($dbc,$_POST['title']);
	$classify_type=mysqli_escape_string($dbc,$_POST['classify_type']);
	$classify=mysqli_escape_string($dbc,$_POST['classify']);
	$location=mysqli_escape_string($dbc,$_POST['location']);
    // $id=md5(uniqid(rand()));

    $query="update classify SET contact='$contact', title='$title',classify_type='$classify_type',article='$classify' ,location='$location',post_date=now() where email='$user'";
    $result=mysqli_query($dbc,$query);
@header("refresh:1,user-profile");

if($result){

echo '<p class="alert alert-success text-center">Classified Updated Successfully <span class="close pull-right"> <a href="#"> X </span></p>'; 

}

}
 ?>



