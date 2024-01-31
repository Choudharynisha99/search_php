<?php 

	$con = mysqli_connect('localhost','root','','employ') or die();

	if (!$con) {
		
		echo "Connect Faild" . mysqli_connect_error();
	}


 ?>