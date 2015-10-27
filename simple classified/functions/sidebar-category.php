

<?php 

//getting all classify posted by user
include 'configuration.php';



$query="select classify_type,count(classify_id) from classify group by classify_type";

$result=mysqli_query($dbc,$query);

if(mysqli_num_rows($result)==0){
	
	echo '<li class="list-group-item text-center">No Category Available.</li>';
}else{
	echo '<li class="list-group-item text-center"><a href="index" >&raquo;&nbsp;All Categories</a></li>'; 
}

while($class_type=mysqli_fetch_array($result)){
	$row=mysqli_num_rows($result);
$classifytype=$class_type['classify_type'];

echo '<li class="list-group-item text-center"><a href="specific-category?category='.$classifytype.'" >&raquo;&nbsp;'."$classifytype". '&nbsp;('.@$class_type[count(classify_id)].')</a></li>'; }


//getting number of classify


 ?>
