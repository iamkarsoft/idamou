<?php 


include 'configuration.php';

$query="select classify_type,count(classify_id),location from classify group by location";

$result=mysqli_query($dbc,$query);

while($class_type=mysqli_fetch_array($result)){
	$row=mysqli_num_rows($result);
$classifyregion=$class_type['location'];

echo '<li class="list-group-item text-center"><a href="specific-location?location='.$classifyregion.'" >&raquo;&nbsp;'."$classifyregion". '&nbsp;('.@$class_type[count(location)].')</a></li>';};


if(mysqli_num_rows($result)==0){
	
	echo '<li class="list-group-item text-center">No Locations Classifieds .</li>';
}
 ?>