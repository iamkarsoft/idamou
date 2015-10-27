<?php 



	//all index page functions

//getting the recent 5  classifieds


		include 'configuration.php';

	$query="select * from classify ORDER BY post_date DESC limit 6 ";
$result=mysqli_query($dbc,$query);

while($row=mysqli_fetch_array($result)){
	$title=$row['title'];
	$cid=$row['classify_id'];
	$category=$row['classify_type'];


				echo '<div class="col-md-4  browse-categories">';

					echo '<div class="thumbnail">
								<div class="caption text-center">
								<h4 class="text-center">Posted in <a href="specific-category?category='.$category.'">'.$row['classify_type'].'</a> Category</h4>

	<a href="specific-classify?page='.$title.'&cid='.$cid.'">&raquo;&nbsp;&nbsp;'.$row['title'].'&nbsp;<span class="small text-warning">'.date("M d, Y",strtotime($row['post_date'])).'</span></a></li>

				</div>
							</div>';

				echo'</div>';

}
if(mysqli_num_rows($result)==0){
	echo '<h4 class="text-center lead">No Classifieds Available. Please check back later  </h4>';
	
}
	

 ?>