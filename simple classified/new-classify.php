<?php include 'header.php' ?>

<div class="container">
		<?php if(isset($user)) : ?>


				<div class="col-md-offset-3 col-md-6">
				<h3> Post a new classify</h3>
				<?php include 'functions/new-classified.php'; ?>
				</div>
				<div class="col-md-offset-3 col-md-7 my-forms">
			<form method="post"  action="<?php $_SERVER['PHP_SELF'] ?>" >	
							<br/>
						
					
					<div class="form-group">
					<label>Name</label>
					
						<input name="name" class="form-control" required value="<?php echo $row['first_name'].'&nbsp;'. $row['last_name'] ?>" type="text" disabled>
						</div>
						
						<input name="fname"  value="<?php echo $row['first_name'] ?>" type="hidden">

						<input name="lname" value="<?php echo $row['last_name'] ?>" type="hidden">

						<input name="pubdate"  type="hidden">

						
						<div class="form-group">
						<label>email</label>
						
						<input name="u-email" required  class="form-control" value="<?php echo $row['email'] ?>" type="email"  disabled>
						</div>
						<input name="email"    value="<?php echo $row['email'] ?>" type="hidden">
 
						
						<div class="form-group">
						<label>Contact</label>		
						<input name="contact" required class="form-control" value="<?php echo $row['contact'] ?>" type="text">
						</div>


						
						<div class="form-group">
						<label>Classify Title</label>
						<input name="title" required  class="form-control" autofocus type="text">
						</div>


						
						<div class="form-group">
						<label>Classify Type</label>
						
						<select name="classify_type"  class="form-control" required>
							<option select="" value="">Choose Classify Category</option>
								<?php 
															include 'configuration.php';

													$query="select * from classify_type";
														$result=mysqli_query($dbc,$query);

															while($class_type=mysqli_fetch_array($result)){
										$classifytype=$class_type['classify_type'];
								echo '<option  >'."$classifytype".'</option>'; } ?>
						</select>
						</div>

						

						
              <div class="form-group">
    <label >Region</label>

    <select name="location" class="form-control">
    <option select="" value="">Choose Classify Location</option>
  <?php 
                              include 'configuration.php';

                          $query="select * from location";
                            $result=mysqli_query($dbc,$query);

                              while($location=mysqli_fetch_array($result)){
                    $location=$location['location'];
                echo '<option  >'."$location".'</option>'; } ?>
    </select>
        </div>
						<div class="form-group">
						<label >Classify</label>
						
						<textarea cols="100" rows="10" class="form-control" name="classify" required></textarea>
						<br><button class="btn btn-primary" type="submit">Post</button></div>
						

						<input name="pubdate" type="hidden">
						
				
					</form>
				</div>
			<?php else: header("location:login"); ?>

				<?php endif; ?>

			
</div>

<?php include 'footer.php' ?>