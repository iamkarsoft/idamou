<?php 

include 'configuration.php';

$query="select classify_type,count(classify_id),location from classify group by location";

$result=mysqli_query($dbc,$query);

while($class_type=mysqli_fetch_array($result)){
	$row=mysqli_num_rows($result);
$classifyregion=$class_type['location'];


				echo '<div class="col-md-3  browse-categories">';

					echo '<div class="thumbnail">
								<div class="caption text-center">
							<h3><a href="specific-location?location='.$classifyregion.'" >'."$classifyregion".'</a>&nbsp;<span class="badge bg-primary" style="font-size:large">'.@$class_type[count(location)].'</span></h3>
							
								</div>
							</div>';

				echo'</div>';


}

if(mysqli_num_rows($result)==0){
	echo '<h4 class="text-center lead">No Classifieds Available By Location. Please check back later  </h4>';
	
}
	
?>