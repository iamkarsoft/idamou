
<?php 	include 'configuration.php';	
	@include 'session.php';



$sql="select * from classify where email='$user' ORDER BY post_date DESC";
$result=mysqli_query($dbc,$sql);
$rows=mysqli_num_rows($result);

if($rows==0){


	echo'<p class="alert alert-warning text-center lead">You haven\'t posted any classified yet </p>';
}elseif($rows>0){
$query="select count(*) from classify where email='$user' ORDER BY post_date DESC";
$result=mysqli_query($dbc,$query);
$roww=mysqli_fetch_row($result);

$numrows=$roww[0];
//number of rows to show
$rowsperpage=2;

//find out total pages
$totalpages=ceil($numrows/$rowsperpage);

//get the current page or set a default

if(isset($_GET['currentpage']) && is_Numeric($_GET['currentpage'])){

	//cast var is int
	$currentpage=(int)$_GET['currentpage'];

	}else{

		//default page num
		$currentpage=1;
	}

	//if current page is greater than total pages
	if($currentpage>$totalpages){

		$currentpage=$totalpages;
	}//end if

	//if current page is less than first page
	if($currentpage<1){
		$currentpage=1;
	}
//the offset based on current page
	$offset=($currentpage-1)*$rowsperpage;

	//get info from database
$query="select title ,post_date,classify_id from classify where email='$user' ORDER BY post_date DESC LIMIT $offset, $rowsperpage";
$result=mysqli_query($dbc,$query);


while($list=mysqli_fetch_array($result)){


	$title=$list['title'];
	$cid=$list['classify_id'];
	echo'<li class="list-group-item text-center"><a href="specific-classify?page='.$title.'&cid='.$cid.'" class="lead text-center">&raquo;&nbsp;'.$list['title'].'&nbsp;<span class="small text-warning">'.date("M d, Y",strtotime($list['post_date'])).'</span></a></li>';
}//end while

			// 		// building the pagination

			
			// //range of num links
			// $range=3;

			// //if not on page 1 , don't show bak links


			// for($x=($currentpage-$range); $x<(($currentpage + $range)+1); $x++){

			// 		//if it's a valid page number

			// 	if(($x >0) && ($x<=$totalpages)){
			// 		// if we're on current page
			// 		if($x==$currentpage){
			// 				//highlight it
			// 			echo "<ul class=\"pagination\"><li class=\"active\"><a href=\"#\">$x</a><li></ul>";

			// 		}else{
			// 			//make it a link
			// 			echo "<ul class=\"pagination\"><li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a><li></ul>";
			// 		}
			// 	}
			// }


}







//getting number of classify



 ?>