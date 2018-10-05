<?php

	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$password ="";
	$confirm ="";
	$errors = array(); 
	$type ="";
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '12345678', 'Inventory');

	// REGISTER USER
	if (isset($_POST['submit'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$confirm = mysqli_real_escape_string($db, $_POST['confirm']);
		$type = mysqli_real_escape_string($db, $_POST['select']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }
		if (empty ($type)) {array_push ($errors, "Please input type of account");}
		if ($password != $confirm) {
			array_push($errors, "The two passwords do not match");
		}
			//check if user is exits already
		$select =("SELECT * FROM users where username='$username' ");
			$check = mysqli_query($db,$select);
		if (mysqli_num_rows($check) !=0) {array_push($errors, "Username is already be taken");}
			//end checking

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password);//encrypt the password before saving in the database
			$query = ("INSERT INTO users (id, username, password, con_passwords, Email, type,date)VALUES (null, '$username', '$password', '$confirm','$email', '$type' , null )");
			mysqli_query($db, $query);
			
			Print '<script>alert("You Have Successfull Created A New Account!");</script>'; //failed
			Print '<script>window.location.assign("index.php");</script>';
		}


	}


	
?>