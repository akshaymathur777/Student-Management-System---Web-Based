<?php 
	session_start();
	if(!isset($_SESSION['fname'])|| empty($_SESSION['fname']))
	{
		header('location:index.php');
		exit;
	}
?>
<html>
	<head>
		<title>
			Marks
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="col-md-6">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">RDBMS Project</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="dashboard.php">Home</a></li>
						<li><a href="attendance_view.php">Attendance</a></li>
						<li  class="active"><a href="marks_view.php">Marks</a></li>
					</ul>
				</div>
			<div class="col-md-4"></div>
			<ul class="nav navbar-nav">>
				<li><a href="dashboard.php">Hi <?php echo $_SESSION['fname'];  ?></a></li>
				<li><a href="logout.php" >Logout</a></li>
			</ul>
		</nav>
		<div class="container">
	  		<h2>Academic Details</h2>
	  		<table class="table table-hover">
		    	<tbody>
		    		<tr>
		    			<th>Subject</th>
		    			<th>Marks</th>
		    		</tr>
		      		<tr>
		        		<th><?php echo $_SESSION['s1'] ?></th>
		        		<td><?php echo $_SESSION['m1'] ?></td>
		     		</tr>
		      		<tr>
				        <th><?php echo $_SESSION['s2'] ?></th>
				        <td><?php echo $_SESSION['m2'] ?></td>
		      		</tr>
		      		<tr>
		      			<th><?php echo $_SESSION['s3'] ?></th>
				        <td><?php echo $_SESSION['m3'] ?></td>
					</tr>
		      		<tr>
		      			<th><?php echo $_SESSION['s4'] ?></th>
				        <td><?php echo $_SESSION['m4'] ?></td>
					</tr>
		      		<tr>
		      			<th><?php echo $_SESSION['s5'] ?></th>
				        <td><?php echo $_SESSION['m5'] ?></td>
					</tr>
					<tr>
		      			<th><?php echo $_SESSION['s6'] ?></th>
				        <td><?php echo $_SESSION['m6'] ?></td>
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
