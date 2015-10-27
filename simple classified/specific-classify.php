<?php include 'header.php' ?>

<div class="container">
	


			<div class="col-md-4">
						<?php if(isset($user)): ?>
					<ul class="list-group">

						<li> <a href="new-classify" class="btn btn-block btn-primary"> Post A Classified</a></li>

					</ul>
				<?php endif; ?>
					<ul class="list-group">
						<li><h4 class="text-center list-group-item active ">All Categories</h4></li>
						<?php include 'functions/sidebar-category.php' ?>

					  </ul>

    				<ul class="list-group">
  						<li><h4 class="text-center list-group-item active ">All Locations</h4></li>
							<?php include 'functions/sidebar-location.php' ?>
   					 </ul>
			<br/>

			</div>

			<div class="col-md-8 my-forms">
				<div class="panel-heading"><h1 class="text-center   "><?php $title=$_GET['page'];
           echo $title ?></h1></div>
						<div class="panel-body">
							<?php include 'functions/specific-classify.php';


						if(isset($_POST['discard'])){include 'functions/discard.php';
@header("location:user-profile");
						} ?>


						 		<?php 
$page=$_GET['page'];
$title=$_GET['cid'];

	$query="select * from classify where classify_id='$title'";
$result=mysqli_query($dbc,$query);
$row=mysqli_fetch_array($result);

 if(isset($user))
{
	$cid=$_GET["cid"];

	if($user==$row['email'] and $cid==$row['classify_id'] or $user=='karsoft92@gmail.com')
{
?>

<!-- triggering the modal button -->
<button class="btn btn-danger" data-toggle="modal" data-target="#discard">Discard</button>
<?php echo '<a class="btn btn-primary" href="edit-classify?page='.$page.'&cid='.$cid.'">Edit</a>';
		
?> 
</div>
</div>
<!-- ================= -->



<?php
}
};?>
			</div>
</div>

<?php include 'delete-classified-modal.php' ?>

<?php include 'footer.php' ?>