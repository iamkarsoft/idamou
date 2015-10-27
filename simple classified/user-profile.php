<?php include 'header.php' ?>

<div class="container">

				<div class="col-md-offset-3 col-md-6 error">

				<?php	include'functions/update-user.php'; ?>

				</div>

				<div class="col-md-offset-3 col-md-6 " style="margin-bottom:3%">
				<h3> User Classified </h3>
				<?php include 'functions/user-classify.php' ?>
				</div>

				<div class="col-md-offset-3 col-md-6">
				<h3> Your Profile </h3>
				
				</div>

	<div class="col-md-offset-3 col-md-6 user-form">


	<form method="post"  action="<?php $_SERVER['PHP_SELF'] ?>" >	
						
								<div class="form-group">
						<label >First Name</label>
							
						<input name="fname" class="form-control" required value="<?php echo $row['first_name'] ?> " type="text">
							</div>

							<div class="form-group">
						<label  >Last Name</label>
							
						<input name="lname" class="form-control"  required value="<?php echo $row['last_name'] ?>" type="text">
							</div>

							<div class="form-group">
						<label  >Email</label>
							
						<input name="email" class="form-control" required  disabled="disabled" value="<?php echo $row['email'] ?>" type="email"> <br>
							</div>
						<div class="form-group">
						<label  >Contact</label>
							
						<input name="contact" class="form-control"  required value="<?php echo $row['contact'] ?>" type="text"> 
							</div>

							<!-- <div class="form-group">
							<label  >Location</label>
							
						<input name="country" class="form-control"  value=""  disabled type="text"> 
					 -->		<br>
							<input value="save"  name="operation"  class="btn btn-primary" type="submit"> &nbsp; &nbsp;<input value="delete" class="btn btn-danger" data-toggle="modal" data-target="#delete"  type="button">

					
						<br/>
						<br/>
					</form>
	
		</div>
</div>

<?php include 'delete-user-modal.php' ?>

<?php include 'footer.php' ?>