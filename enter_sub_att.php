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
			Enter Attendance
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
						<li><a href="stud_taught.php">Students Taught</a></li>
						<li class="active"><a href="attendance.php">Attendance</a></li>
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
		   				Enter Attendance of <?php echo $_SESSION['course_selected']; ?>
		   			</h1>
		   		</thead>
		   		<tbody>
		   			<tr>
		   				<th>ID</th>
			   			<th>Name</th>
			   			<th>Classes Attended</th>
			   			<th>Total Classes</th>
			   			<th>Percentage Present</th>
			   			<th>Enter New Attended Classes</th>
			   			<th>Enter New Total Classes</th>
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
			
							$get_a="SELECT * from attendance where id=$id";
							$res_a=$conn->query($get_a);
							$row_a=$res_a->fetch_row();
							$tot1=$row_a[1];
							$tot2=$row_a[4];
							$tot3=$row_a[7];
							$tot4=$row_a[10];
							$tot5=$row_a[13];
							$tot6=$row_a[16];
							$att1=$row_a[2];
							$att2=$row_a[5];
							$att3=$row_a[8];
							$att4=$row_a[11];
							$att5=$row_a[14];
							$att6=$row_a[17];
							$per1=$row_a[3];
							$per2=$row_a[6];
							$per3=$row_a[9];
							$per4=$row_a[12];
							$per5=$row_a[15];
							$per6=$row_a[18];


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
								print    			"<td>$att1</td>";
								print    			"<td>$tot1</td>";
								print    			"<td>$per1</td>";
								print    			"<td>";
								print               "<form name=\"enter_att\" method=\"POST\" action=\"insert_att.php\">
														<div class=\"form-group\">
															<input type=\"number\" id=\"att\" min=\"0\" max=\"100\" class=\"form-control\" name=\"att\"/>
														</div>
														<div class=\"form-group\">
															<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
														</div>
													</td>";
								print               "<td>
														<div class=\"form-group\">
															<input type=\"number\" id=\"tot\" min=\"0\" max=\"100\" class=\"form-control\" name=\"tot\"/>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
							} 
							 
							elseif(strcmp($_SESSION['course_selected'],$s2)==0)
							{
								
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$att2</td>";
								print    			"<td>$tot2</td>";
								print    			"<td>$per2</td>";
								print    			"<td>";
								print               "<form name=\"enter_att\" method=\"POST\" action=\"insert_att.php\">
														<div class=\"form-group\">
															<input type=\"number\" id=\"att\" min=\"0\" max=\"100\" class=\"form-control\" name=\"att\"/>
														</div>
														<div class=\"form-group\">
															<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
														</div>
													</td>";
								print               "<td>
														<div class=\"form-group\">
															<input type=\"number\" id=\"tot\" min=\"0\" max=\"100\" class=\"form-control\" name=\"tot\"/>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
					       	} 
							
							elseif(strcmp($_SESSION['course_selected'],$s3)==0)
							{
								
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$att3</td>";
								print    			"<td>$tot3</td>";
								print    			"<td>$per3</td>";
								print    			"<td>";
								print               "<form name=\"enter_att\" method=\"POST\" action=\"insert_att.php\">
														<div class=\"form-group\">
															<input type=\"number\" id=\"att\" min=\"0\" max=\"100\" class=\"form-control\" name=\"att\"/>
														</div>
														<div class=\"form-group\">
															<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
														</div>
													</td>";
								print               "<td>
														<div class=\"form-group\">
															<input type=\"number\" id=\"tot\" min=\"0\" max=\"100\" class=\"form-control\" name=\"tot\"/>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
							} 
							
							elseif(strcmp($_SESSION['course_selected'],$s4)==0)
							{
								
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$att4</td>";
								print    			"<td>$tot4</td>";
								print    			"<td>$per4</td>";
								print    			"<td>";
								print               "<form name=\"enter_att\" method=\"POST\" action=\"insert_att.php\">
														<div class=\"form-group\">
															<input type=\"number\" id=\"att\" min=\"0\" max=\"100\" class=\"form-control\" name=\"att\"/>
														</div>
														<div class=\"form-group\">
															<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
														</div>
													</td>";
								print               "<td>
														<div class=\"form-group\">
															<input type=\"number\" id=\"tot\" min=\"0\" max=\"100\" class=\"form-control\" name=\"tot\"/>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
							} 
							
							elseif(strcmp($_SESSION['course_selected'],$s5)==0)
							{
								
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$att5</td>";
								print    			"<td>$tot5</td>";
								print    			"<td>$per5</td>";
								print    			"<td>";
								print               "<form name=\"enter_att\" method=\"POST\" action=\"insert_att.php\">
														<div class=\"form-group\">
															<input type=\"number\" id=\"att\" min=\"0\" max=\"100\" class=\"form-control\" name=\"att\"/>
														</div>
														<div class=\"form-group\">
															<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
														</div>
													</td>";
								print               "<td>
														<div class=\"form-group\">
															<input type=\"number\" id=\"tot\" min=\"0\" max=\"100\" class=\"form-control\" name=\"tot\"/>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
							} 
							
							elseif(strcmp($_SESSION['course_selected'],$s6)==0)
							{
								
								print			"<tr>";
								print    			"<td>$id</td>";
								print    			"<td>$name</td>";
								print    			"<td>$att6</td>";
								print    			"<td>$tot6</td>";
								print    			"<td>$per6</td>";
								print    			"<td>";
								print               "<form name=\"enter_att\" method=\"POST\" action=\"insert_att.php\">
														<div class=\"form-group\">
															<input type=\"number\" id=\"att\" min=\"0\" max=\"100\" class=\"form-control\" name=\"att\"/>
														</div>
														<div class=\"form-group\">
															<input type=\"hidden\" name=\"st_id\" id=\"st_id\" value =$id>
														</div>
													</td>";
								print               "<td>
														<div class=\"form-group\">
															<input type=\"number\" id=\"tot\" min=\"0\" max=\"100\" class=\"form-control\" name=\"tot\"/>
													</td>";
								print 				"<td>
														<div class=\"form-group\">
															<input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Submit\">
														</div>
													</td>";
								print           "</form>";
								print			"</tr>";
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
