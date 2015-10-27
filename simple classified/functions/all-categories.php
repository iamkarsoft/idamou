<?php 

//getting all classify posted by user
include 'configuration.php';

$query="select classify_type,count(classify_id) from classify group by classify_type";

$result=mysqli_query($dbc,$query);

while($class_type=mysqli_fetch_array($result)){
	$row=mysqli_num_rows($result);
$classifytype=$class_type['classify_type'];

		$category=$row['classify_type'];

				echo '<div class="col-md-4  browse-categories">';

					echo '<div class="thumbnail">
								<div class="caption text-center">
							<h3  class="text-center"><a href="specific-category?category='.$classifytype.'" >'."$classifytype".'</a>&nbsp;<span class="badge bg-primary" style="font-size:large">'.@$class_type[count(location)].'</span></h3>
							
								</div>
							</div>';

				echo'</div>';


}

if(mysqli_num_rows($result)==0){
	echo '<h4 class="text-center lead">No Classifieds Available By Categories. Please check back later  </h4>';
	
}




 ?>