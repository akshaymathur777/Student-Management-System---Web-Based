<html>
	<head>
		<title>
			Academic Details
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			
			<div class="jumbotron">
				<h1 id="header" class="text-center">
					Academic Details
				</h1>
			</div>
			
			
		<div class="row">
			<div class="col-md-2">
				
			</div>
		<div class="col-md-4">
				
		<div class="full-width-div">
           
		<form name="academic" method="POST" action="insert_academic.php">
		
		<div class="form-group">
			    <label for="progs">Program</label>
			    <select class="form-control" id="progs" name="progs">
			    <option value="engg">Engineering</option>
				</select>
			</div>
			<div class="form-group">
			    <label for="stream">Stream</label>
				<select class="form-control" id="stream" name="stream">
				<option value="9">B Tech Automobile Engineering</option>
				<option value="8">B Tech Chemical Engineering</option>
				<option value="7">B Tech Civil Engineering</option>
				<option value="1">B Tech Computer Science and Engineering</option>
				<option value="2">B Tech Information Technology</option>
				<option value="5">B Tech Electrical Engineering</option>
				<option value="4">B Tech Electronics and Communication Engineering</option>
				<option value="3">B Tech Mechanical Engineering</option>
				<option value="6">B Tech Mechatronics Engineering</option>
				</select>
			</div>
			<div class="form-group">
				<label for="motocc">Previous School/Institution Name</label>
				<input type="text" id="prev" class="form-control" name="prev" required/>
			</div>
			<div class="form-group">
				<label for="qualexam">Qualifying Exam</label>
				<input type="text" id="qualexam" class="form-control" name="qualexam" required/>
			</div>
			<div class="form-group">
				<label for="prevboard">Previous Board/University</label>
				<input type="text" id="prevboard" class="form-control" name="prevboard" required/>
			</div>
			<div class="form-group">
				<label for="passyr">Month and year of passing</label>
				<input type="month" id="passyr" class="form-control" name="passyr" required/>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary form-control" value="Submit">
			</div>
	 </div>
		</form>	
</html>