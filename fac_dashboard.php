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
			Welcome
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
						<li class="active"><a href="fac_dashboard.php">Home</a></li>
						<li><a href="course_taught.php">Courses Taught</a></li>
						<li><a href="stud_taught.php">Students Taught</a></li>
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
		<div class="container">
	  		<h2>Faculty Details</h2>
	  		<table class="table table-hover">
		    	<tbody>
		      		<tr>
		        		<th>Name</th>
		        		<td><?php echo ($_SESSION['fname']." ".$_SESSION['lname']);  ?></td>
		     		</tr>
		      		<tr>
				        <th>Email</th>
				        <td><?php echo $_SESSION['email'] ?></td>
		      		</tr>
		      		<tr>
				        <th>Date of Birth</th>
				        <td><?php echo $_SESSION['dob'] ?></td>
		      		</tr>
		      		<tr>
				        <th>Gender</th>
				        <td><?php echo $_SESSION['gender'] ?></td>
		      		</tr>
		      		<tr>
		      			<th>Address</th>
		      			<td><?php echo $_SESSION['address'] ?></td>
		      		</tr>
		      		<tr>
		      			<th>Mobile Number</th>
		      			<td><?php echo $_SESSION['mobile'] ?></td>
		      		</tr>
		      		<tr>
		      			<th>Nationality</th>
		      			<td><?php echo $_SESSION['nationality'] ?></td>
		      		</tr>
		      		<tr>
		      			<th>Qualification</th>
		      			<td><?php echo $_SESSION['qual'] ?></td>
		      		</tr>
		      		<tr>
		      			<th>Department</th>
		      			<td><?php echo $_SESSION['dept'] ?></td>
		      		</tr>
		    	</tbody>
		    </table>
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
