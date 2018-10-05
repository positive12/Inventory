
<?php

	session_start();

	$username = "";
	$password = "";
	$errors = array(); 

	$db = mysqli_connect('localhost', 'root', '12345678', 'Inventory');
	if (isset($_POST['submit_user'])) {

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if(empty($username)){array_push($errors, "Please Input Username");}
		if(empty($password)){array_push($errors, "PLease Input Password");}

			if(count($errors) == 0){
				$passwords = md5($password);
				$selects = "SELECT * FROM users WHERE username = '$username' and password = '$passwords'";
					$select = mysqli_query($db ,$selects);
						$_SESSION['username']= $username;
					$type = mysqli_fetch_row($select);
						

					$row = $type[3];
				if (mysqli_num_rows($select) > 0) {
						$_SESSION['username'] =$type [1];
					if($row == 1){
						$_SESSION['username']= $username;
						header('location: ./item.php');
					}
					if($row == 2){
						header('location: user.php');
					}
					}else{
					array_push($errors, "wrong combination of username and password");
				}
			}
	}		



?>