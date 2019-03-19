<?php 
	session_start();
	if(!isset($_SESSION['fname'])|| empty($_SESSION['fname']))
	{
		header('location:faculty_index.php');
		exit;
	}
	$_SESSION['course_selected']=$_POST["sel_cname"];
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
						<li class="active"><a href="stud_taught.php">Students Taught</a></li>
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
		
		<div class='container'>
	  		<table class='table table-hover'>
		   		<thead>
		   			<h1>
		   				Students Taught in <?php echo $_SESSION['course_selected']; ?>
		   			</h1>
		   		</thead>
		   		<tbody>
		   			<tr>
		   				<th>ID</th>
			   			<th>Name</th>
			   			<th>Marks</th>
			   			<th>Attendance</th>
			   		</tr>
			   		<?php	
						include('connection.php');
						$dept_id=$_SESSION['dept_id'];
						$sql1 = "SELECT * FROM academic_details where dept_id=$dept_id";
						$result = $conn->query($sql1);
						while($row1 =$result->fetch_assoc()) 
						{
							$id=$row1['id'];
							$fname=$row1['fname'];
							$lname=$row1['lname'];
							
							$get_m="SELECT * from marks where id=$id";
							$res_m=$conn->query($get_m);	
							$row_m=$res_m->fetch_row();
							$m1=$row_m[1];
							$m2=$row_m[2];
							$m3=$row_m[3];
							$m4=$row_m[4];
							$m5=$row_m[5];
							$m6=$row_m[6];

							$get_a="SELECT * from attendance where id=$id";
							$res_a=$conn->query($get_a);
							$row_a=$res_a->fetch_row();
							$a1=$row_a[1];
							$a2=$row_a[2];
							$a3=$row_a[3];
							$a4=$row_a[4];
							$a5=$row_a[5];
							$a6=$row_a[6];


							$get_s="SELECT * from subjects where id=$id";
							$res_s=$conn->query($get_s);
							$row_s=$res_s->fetch_row();
							$s1=$row_s[1];
							$s2=$row_s[2];
							$s3=$row_s[3];
							$s4=$row_s[4];
							$s5=$row_s[5];
							$s6=$row_s[6];
							$name="$fname $lname";
							if(strcmp($_SESSION['course_selected'],$s1)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m1</td>";
								print    			"<td>$a1</td>";
								print			"</tr>";
					       	
							} 
							elseif(strcmp($_SESSION['course_selected'],$s2)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m2</td>";
								print    			"<td>$a2</td>";
								print			"</tr>";
					       	
							}
							elseif(strcmp($_SESSION['course_selected'],$s3)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m3</td>";
								print    			"<td>$a3</td>";
								print			"</tr>";
					       	
							}
							elseif(strcmp($_SESSION['course_selected'],$s4)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m4</td>";
								print    			"<td>$a4</td>";
								print			"</tr>";
					       	
							}
							elseif(strcmp($_SESSION['course_selected'],$s5)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m5</td>";
								print    			"<td>$a5</td>";
								print			"</tr>";
					      	
							}
							elseif(strcmp($_SESSION['course_selected'],$s6)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$s6</td>";
								print    			"<td>$m6</td>";
								print    			"<td>$a6</td>";
								print			"</tr>";
					       	
							}
						}
						$conn->close();
					?>
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
