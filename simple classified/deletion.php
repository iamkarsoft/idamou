<?php include 'header.php' ?>

<div class="container">
	<div class="col-md-offset-3 col-md-6">
<p>We are sorry to see you go. However  if this was a mistake you can always <a href="signup">Sign Up</a></p>
	</div>

	<div class="col-md-offset-3 col-md-6">
		   
            <?php
include'functions/delete-account.php';
session_destroy();
?>
	</div>
		
</div>

<?php include 'footer.php' ?>