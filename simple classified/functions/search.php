<?php 


include 'configuration.php';

$search=$_POST['search'];
$searchLocation=$_POST['search-location'];
$searchCategory=$_POST['search-category'];


if(isset($search) and !isset($searchLocation) and !isset($searchCategory)){


$query="select * from classify where article like %$search%";
$result=mysqli_query($dbc,$query);
$row=mysqli_fetch_array($result);
if($row!=0){

			echo '<div class="col-md-12">';

			echo '<p>'.$row['title'].'&nbsp;'.$row['post_date'].'&nbsp;'.$row['location'].'</p>';
			echo '</div>'

}//end of first if clause

}//end of search function




 ?>