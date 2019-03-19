<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<title>
			Login Page
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			
			<div class="jumbotron">
				<h1 id="header" class="text-center">
					Login Page
				</h1>
			</div>
						
			<div class="row">
				<div class="col-md-4">
				
				</div>
				<div class="col-md-4">
					
					<form name="loginForm" action="login_auth.php" method="POST">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="log_id" class="form-control" name="log_id" required/>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="log_pass" class="form-control" name="log_pass" required/>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value="Login">
					</div>
					<div class="form-group" style="text-align: center;">
						<p>Are you a <a href="faculty_index.php">faculty</a>?</p> 
						<p>Do not have an account? <a href="reg_page.php">SignUp</a></p>
					</div>	
					</form>
				</div>
				
				<div class="col-md-4"></div>
			
		</div>
	</div>
	<?php 
		if(isset($_SESSION['message']))
		{
			echo "<script>alert('".$_SESSION['message']."');</script>";
			session_destroy();
		}
	?>
	</body>
</html>