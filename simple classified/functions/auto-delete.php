<?php 

	// auto deletes scripts that are old
	
			include 'configuration.php';
			$query= "DELETE  from classify where post_date <= NOW() - INTERVAL 21 Day";
			$result=mysqli_query($dbc,$query);

			mysqli_close($dbc);



		

 ?>