<?php
	require 'connect.php';

	$cnumber = "";
	$errors = array(); 


	if(isset($_POST['addnets'])){
		$cnumber = mysqli_real_escape_string($db, $_POST['cnumber']);

		/*------------check if it is aleary added -------*/
		$select = ("SELECT * FROM servers where server = '$cnumber' ");
		$check = mysqli_query ($db, $select);
		if (mysqli_num_rows($check) !=0) {array_push($errors, "Server is Already Added");}
		/*----------------End of checking---------------------------*/

		if (count($errors) == 0) {
			$cadd = ("INSERT INTO servers (id, server, date) VALUES ( null , '$cnumber', null )");
			$cadds = mysqli_query($db , $cadd);

				Print '<script>alert("You Have Successfull Created A New Account!");</script>'; //failed
				Print '<script>window.location.assign("item.php");</script>';
		}else{
			Print '<script>alert("SORRY It Will not be added Aleady exist");</script>'; //failed
			Print '<script>window.location.assign("item.php");</script>';
		}

		
	}
?>