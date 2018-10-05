<?php
	
	$sitem = "";
	$sip = "";
	$susername ="";
	$spassword ="";
	$scategory ="";
	$sstatuss ="";
	$snum 	="";


	require'connect.php';

	if (isset($_POST['addbtns'])) {

		$sitem 	   =mysqli_real_escape_string ($db, $_POST['sitem']);
		$sip	   =mysqli_real_escape_string ($db, $_POST['sip']);
		$susername =mysqli_real_escape_string ($db, $_POST['susername']);
		$spassword =mysqli_real_escape_string ($db, $_POST['spassword']);
		$scategory =mysqli_real_escape_string ($db, $_POST['scategory']);
		$sstatuss  =mysqli_real_escape_string ($db, $_POST['sstatuss']);
		$snum 	   =mysqli_real_escape_string ($db, $_POST['snum']);
		$pin	   =mysqli_real_escape_string ($db, $_POST['pin']);
		$rack 	   =mysqli_real_escape_string ($db, $_POST['rack']);
    $add = ("INSERT INTO server (s_id, s_number, s_name, s_ipadd, s_username, s_password, s_category, s_status, s_ipadd1, s_ipadd2, date, pinnumber, s_rack) VALUES
      (null, '$snum', '$sitem', '$sip', '$susername', '$spassword', '$scategory', '$sstatuss' , null, null, null, '$pin','$rack' )");
			
      $adds = mysqli_query($db, $add);
    if(!$adds){
        Print '<script>alert("Sorry error!");</script>'; //failed
		Print '<script>window.location.assign("item.php");</script>';
    }
    	Print '<script>alert("You Have Successfull Created A New Account!");</script>'; //failed
		Print '<script>window.location.assign("item.php");</script>';
	


	}
?>
<!-- https://codepen.io/rajrs/pen/dMowNx -->