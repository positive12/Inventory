<?php 
 	require 'connect.php';

 	$s_ipadd = "127.0.0.1";

	 	if (isset($_POST ['id'])) {
	 			$s_name = mysqli_real_escape_string($db, $_POST['s_name']);
	 			$s_ipadd = mysqli_real_escape_string($db, $_POST['s_ipadd']);
	 			$s_username = mysqli_real_escape_string($db, $_POST['s_username']);
	 			$s_password = mysqli_real_escape_string($db, $_POST['s_password']);
	 			$s_status = mysqli_real_escape_string($db, $_POST['s_status']);
	 			$id = mysqli_real_escape_string($db, $_POST['id']);

	 		$result  = mysqli_query($db , "UPDATE server SET s_name='$s_name' , s_ipadd='$s_ipadd' , s_username = '$s_username' , s_password = '$s_password' , s_status = '$s_status' WHERE id='$id'");
			if($result){
				echo 'data updated';
			}


	 	}
?>