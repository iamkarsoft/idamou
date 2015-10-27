<?php 

//discard or delete   classified

		if($_POST){
		include 'configuration.php';	
//$discard=$_GET['page'];
$cid=$_GET['cid'];


$query="DELETE from classify where  classify_id='$cid'";

$result=mysqli_query($dbc,$query);


}




 ?>