<!--  -->
					<div class="modal fade" id="delete" data-backdrop="static"  tab-index="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	
	<div class="modal-dialog">
		<div class="modal-content">
		<!-- modal header -->
		<div class="modal-header">
	<button type="btn" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	<h4 class="modal-title" id="modalLabel">Delete Your Account?</h4></div>
		<!-- modal body -->

		<div class="modal-body">
			You are about to delete your idamou account?

		</div>

		<!-- modal footer -->

		<div class="modal-footer">
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-inline">
		<button class="btn" type="button" data-dismiss="modal">Close </button>
		
		<input value="delete" class="btn btn-danger" data-toggle="modal" data-target="#delete" class="btn btn-danger" name="operation" type="submit">
		</form>
		</div>

		</div>




	</div>

</div>

<!--  -->