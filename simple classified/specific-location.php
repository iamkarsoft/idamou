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

			<div class="col-md-8 ">
				<ul class="list-group">
				<li class="list-group-item active">
			<h1 class=" text-center"><?php $title=$_GET['location'];
           echo $title ?></h1></li>
				<?php include 'functions/specific-location.php' ?>
				</ul>
				

			</div>
<!-- ================= -->



</div>

<?php include 'footer.php' ?>