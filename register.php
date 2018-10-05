<?php include ('page/register_exec.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inventory System</title>
	</head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>



	<body>

		<div class="container">
		    	<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-login">
							<div class="panel-heading">
								<div class="row">

									<div class="col-xs-6">
										<a href="#" class="active" id="-form-link">Register</a>
									</div>
								</div>
								<hr>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">

										<form id="register-form" action="register.php" method="POST" role="form" style="display: block;">

											<?php include('page/error.php');?>

											<div class="form-group">
												<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
																				
											</div>
											<div class="form-group">
												<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php echo $email; ?>">
											</div>
											<div class="form-group">
												<input type="password" name="password" id="password" tabindex="2"  value ="<?php echo $password; ?>"class="form-control" placeholder="Password">
											</div>
											<div class="form-group">
												<input type="password" name="confirm" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password" value="<?php echo $confirm ?>">
												<span id='message'></span>
											</div>

											<div class="form-group">
												<select name = "select" class="form-control form-control1" value="<?php echo $confirm ?>">
												    <option selected="true" disabled="disabled"><p>Choose Account Type</p></option>
												    <option name="1" value="1">Admin</option>
												    <option name="2" value="2">User</option>
												  </select>
											</div>											

											<div class="form-group">
												<div class="row">
													<div class="col-sm-6 col-sm-offset-3">

														<input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
																						
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- code for javascript for maching password top -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			<script>
				$('#password, #confirm_password').on('keyup', function () {
  				if ($('#password').val() == $('#confirm_password').val()) {
  				 $('#message').html('Matching').css('color', 'green');
  				} else 
    			$('#message').html('Not Matching').css('color', 'red');
				});
			 </script>
			 <!-- end -->


				
			<!-- ----for javascript -->
			<script src="js/jquery.js"></script>
			<script src="js/javascript.js"></script>

		</body>
</html>

