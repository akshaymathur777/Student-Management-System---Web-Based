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
			Enter Marks
		</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="col-md-9">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">RDBMS Project</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="fac_dashboard.php">Home</a></li>
						<li><a href="course_taught.php">Courses Taught</a></li>
						<li><a href="stud_taught.php">Students Taught</a></li>
						<li><a href="attendance.php">Attendance</a></li>
						<li class="active"><a href="marks.php">Marks</a></li>
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
		   				Enter Marks of <?php echo $_SESSION['course_selected']; ?>
		   			</h1>
		   		</thead>
		   		<tbody>
		   			<tr>
		   				<th>ID</th>
			   			<th>Name</th>
			   			<th>Previous Marks</th>
			   			<th>New Marks</th>
			   			<th></th>
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
							$marks=0;
							if(strcmp($_SESSION['course_selected'],$s1)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m1</td>";
								print    			"<td>";
								print               "<form name=\"enter_marks\" method=\"POST\" action=\"insert_marks.php\">
														<div class=\"col-md-3\">
															<div class=\"form-group\">
																 <input type=\"number\" id=\"marks\" min=\"0\" max=\"100\" class=\"form-control\" name=\"marks\"/>
															</div>
															<div class=\"form-group\">
																<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
															</div>
														</div>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
					       		$marks=$marks+1;
							} 
							 
							elseif(strcmp($_SESSION['course_selected'],$s2)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m2</td>";
								print    			"<td>";
								print               "<form name=\"enter_marks\" method=\"POST\" action=\"insert_marks.php\">
														<div class=\"col-md-3\">
															<div class=\"form-group\">
																 <input type=\"number\" id=\"marks\" min=\"0\" max=\"100\" class=\"form-control\" name=\"marks\"/>
															</div>
															<div class=\"form-group\">
																<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
															</div>
														</div>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
					       		$marks=$marks+1;
					       	} 
							
							elseif(strcmp($_SESSION['course_selected'],$s3)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m3</td>";
								print    			"<td>";
								print               "<form name=\"enter_marks\" method=\"POST\" action=\"insert_marks.php\">
														<div class=\"col-md-3\">
															<div class=\"form-group\">
																 <input type=\"number\" id=\"marks\" min=\"0\" max=\"100\" class=\"form-control\" name=\"marks\"/>
															</div>
															<div class=\"form-group\">
																<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
															</div>
														</div>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
					       		$marks=$marks+1;
							} 
							
							elseif(strcmp($_SESSION['course_selected'],$s4)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m4</td>";
								print    			"<td>";
								print               "<form name=\"enter_marks\" method=\"POST\" action=\"insert_marks.php\">
														<div class=\"col-md-3\">
															<div class=\"form-group\">
																 <input type=\"number\" id=\"marks\" min=\"0\" max=\"100\" class=\"form-control\" name=\"marks\"/>
															</div>
															<div class=\"form-group\">
																<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
															</div>
														</div>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
					       		$marks=$marks+1;
							} 
							
							elseif(strcmp($_SESSION['course_selected'],$s5)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m5</td>";
								print    			"<td>";
								print               "<form name=\"enter_marks\" method=\"POST\" action=\"insert_marks.php\">
														<div class=\"col-md-3\">
															<div class=\"form-group\">
																 <input type=\"number\" id=\"marks\" min=\"0\" max=\"100\" class=\"form-control\" name=\"marks\"/>
															</div>
															<div class=\"form-group\">
																<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
															</div>
														</div>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
					       		$marks=$marks+1;
							} 
							
							elseif(strcmp($_SESSION['course_selected'],$s6)==0)
							{
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$m6</td>";
								print    			"<td>";
								print               "<form name=\"enter_marks\" method=\"POST\" action=\"insert_marks.php\">
														<div class=\"col-md-3\">
															<div class=\"form-group\">
																 <input type=\"number\" id=\"marks\" min=\"0\" max=\"100\" class=\"form-control\" name=\"marks\"/>
															</div>
															<div class=\"form-group\">
																<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
															</div>
														</div>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
					       		$marks=$marks+1;
							} 
						}
						$conn->close();
					?>
				</tbody>
			</table>
	<?php 
      	if(isset($_SESSION['message']))
      	{
        	echo "<script>alert('".$_SESSION['message']."');</script>";
        	unset($_SESSION['message']);
      	}
    ?>
	</body>
</html>