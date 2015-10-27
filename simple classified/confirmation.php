<?php include 'header.php' ?>

<div class="container">


	<div class="col-md-offset-3 col-md-6">
		   
  			<?php
$passkey=$_GET['passkey'];
if($passkey==""){
header("location:index");
}else{

include 'functions/confirmation.php';
}
?>
	</div>
		
</div>

<?php include 'footer.php' ?>