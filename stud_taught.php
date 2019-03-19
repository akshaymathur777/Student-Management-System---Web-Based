<?php 
	session_start();
	if(!isset($_SESSION['fname'])|| empty($_SESSION['fname']))
	{
		header('location:faculty_index.php');
		exit;
	}
?>
<html>
	<head>
		<title>
			Students Taught
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="col-md-10">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">RDBMS Project</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="fac_dashboard.php">Home</a></li>
						<li><a href="course_taught.php">Courses Taught</a></li>
						<li  class="active"><a href="stud_taught.php">Students Taught</a></li>
						<li><a href="attendance.php">Attendance</a></li>
						<li><a href="marks.php">Marks</a></li>
						<li><a href="class_att.php">Class Attendance</a></li>
					</ul>
				</div>
			<div class="col-md-1"></div>
			<ul class="nav navbar-nav">>
				<li><a href="dashboard.php">Hi <?php echo $_SESSION['fname'];  ?></a></li>
				<li><a href="logout.php" >Logout</a></li>
			</ul>
		</nav>
		<div class="col-md-4">
			<form name="stud_view" action="stud_taught_course.php" method="POST">
				<div class="form-group">
				  	<label for="post"><h4>Students Studying In</h4></label>
				  		<select class="form-control" id="sel_cname" name="sel_cname">
				  			<?php	
							include('connection.php');
							$dept_id=$_SESSION['dept_id'];
							$sql = "SELECT * FROM courses where dept_id=$dept_id";
							$result = $conn->query($sql);
							
							while($row =$result->fetch_assoc()) 
							{
								$course_name=$row['cname'];
								print "<option value=\"$course_name\">$course_name</option>";
					   		}
					   		$conn->close();
					   	?>
						</select>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value="Submit">
					</div>
				</div>
			</form>
		</div>

		
	<?php 
      	if(isset($_SESSION['message']))
      	{
        	echo "<script>alert('".$_SESSION['message']."');</script>";
        	unset($_SESSION['message']);
      	}
    ?>
	</body>
</html>
