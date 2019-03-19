<!doctype html>
<html>
	<head>
		<title>
			Registration Page
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			
			<div class="jumbotron">
				<h1 id="header" class="text-center">
					Registration Page
				</h1>
			</div>
			
			
		<div class="row">
			<div class="col-md-2">
				
			</div>
		<div class="col-md-4">
				
		<div class="full-width-div">
           
		<form name="reg_page" method="POST" action="insert_stud.php">
		
		
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" id="firstname" class="form-control" name="firstname" required/>
			</div>
			
			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" id="lastname" class="form-control" name="lastname" required/>
			</div>
			<div class="form-group">
				<label for="sem">Semester</label>
				<input type="number" id="sem" min='0' max='9'class="form-control" name="sem" required/>
			</div>
			<div class="form-group">
				<label for="dob">Date of Birth</label>
				<input type="date" id="dob" class="form-control" name="dob" required/>
			</div>
			<div class="form-group">
				<label for="gender">Gender</label><br>
				<input type="radio" id="gen" name="gen" value="M">Male<br>
				<input type="radio" id="gen" name="gen" value="F">Female<br>	
			</div>	
				<div class="form-group">
				<label for="address">Address</label>
				<textarea class="form-control" rows="5" id="address" name="address"></textarea>
			</div>
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" id="city" class="form-control" name="city" required/>
			</div>
			<div class="form-group">
				<label for="state">State</label>
				<input type="text" id="state" class="form-control" name="state" required/>
			</div>
			<div class="form-group">
				<label for="pincode">PIN</label>
				<input type="text" id="pincode" class="form-control" name="pincode" pattern="[0-9]{6}" required/>
			</div>
			<div class="form-group">
				<label for="country">Country</label>
				<input type="text" id="country" class="form-control" name="country" required/>
			</div>
			<div class="form-group">
				<label for="mob">Mobile</label>
				<input type="text" id="mob" class="form-control" name="mob" pattern="[789][0-9]{9}" required/>
			</div>
			<div class="form-group">
				<label for="email">E-mail ID</label>
				<input type="text" id="email" class="form-control" name="email" required/>
			</div>
			<div class="form-group">
				<label for="fatname">Father's Name</label>
				<input type="text" id="fatname" class="form-control" name="fatname" required/>
			</div>
			<div class="form-group">
				<label for="fatocc">Father's Occupation</label>
				<input type="text" id="fatocc" class="form-control" name="fatocc" required/>
			</div>
			<div class="form-group">
				<label for="motname">Mother's Name</label>
				<input type="text" id="motname" class="form-control" name="motname" required/>
			</div>
			<div class="form-group">
				<label for="motocc">Mother's Occupation</label>
				<input type="text" id="motocc" class="form-control" name="motocc" required/>
			</div>
			<div class="form-group">
				<label for="pmob">Parent's Mobile</label>
				<input type="text" id="pmob" class="form-control" name="pmob" pattern="[789][0-9]{9}" required/>
			</div>
			<div class="form-group">
				<label for="nationality">Nationality</label>
				<input type="text" id="nationality" class="form-control" name="nationality" required/>
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input type="password" id="pass" class="form-control" name="pass" required/>
			</div>
			<div class="form-group">
				<label for="repass">Confirm Password</label>
				<input type="password" id="repass" class="form-control" name="repass" required/>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary form-control" value="Submit">
			</div>
	 </div>
	
		</form>
	</body>
</html>	