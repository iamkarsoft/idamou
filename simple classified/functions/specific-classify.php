<?php 

//getting to view specific classify



include 'configuration.php';
$cid=$_GET['cid'];

$query="select * from classify where  classify_id='$cid'";
$result=mysqli_query($dbc,$query);
$row=mysqli_fetch_array($result);
$date=$row['post_date'];




echo'<div class=" text-center" ><ul style="list-style:none;"><li class="">'.date("M d, Y",strtotime($date)).'</li><li class="">&nbsp;&nbsp;Author:&nbsp;'.$row['first_name'].'&nbsp;'.$row['last_name'].'</li>';
 echo'<li class="">Email:&nbsp;&nbsp;<a href="mailto:'.$row['email'].'">'.$row['email'].'</a></li><li class="">Contact:&nbsp;&nbsp;'.$row['contact'].'</li><li class="">Region:&nbsp;&nbsp;'.$row['location'].'</li></ul></div><br><br>'; 
 
 echo'<p class="col-md-12  lead text-left">'.$row['article'].'</p>'; 
 



 ?>