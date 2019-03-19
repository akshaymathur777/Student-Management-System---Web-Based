<?php
	session_start();
	include('connection.php');
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$sem=$_POST["sem"];
	$add=$_POST["address"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$pin=$_POST["pincode"];
	$country=$_POST["country"];
	$gen=$_POST["gen"];
	$dob=$_POST["dob"];
	$mob=$_POST["mob"];
	$mail=$_POST["email"];
	$fatname=$_POST["fatname"];
	$motname=$_POST["motname"];
	$fatocc=$_POST["fatocc"];
	$motocc=$_POST["motocc"];
	$pmob=$_POST["pmob"];
	$nat=$_POST["nationality"];
	$pass=$_POST["pass"];
	$repass=$_POST["repass"];
	$address="$add $city $state $pin $country";

	if ($pass==$repass)
	{
		$sql = "INSERT INTO student(fname,lname,dob, gender, address, mob, email,father, mother, pmob, foccupation, moccupation, nationality, pwd)
				VALUES ('$fname','$lname','$dob','$gen','$address','$mob','$mail','$fatname','$motname','$pmob','$fatocc','$motocc','$nat','$pass')";

		if (mysqli_query($conn, $sql)) 
		{
		    $stud="SELECT * FROM student WHERE email='$mail' and pwd='$pass'";
			$result = $conn->query($stud);
			$user=$result->fetch_row();	
			if($user)
			{
					$_SESSION['sem']=$sem;
					$_SESSION['fname']=$user[1];
					$_SESSION['lname']=$user[2];
					$_SESSION['email']=$user[7];
					$_SESSION['id']=$user[0];
					$_SESSION['dob']=$user[3];
					$_SESSION['gender']=$user[4];
					$_SESSION['mobile']=$user[6];
					$_SESSION['address']=$user[5];
					$_SESSION['fat_name']=$user[8];
					$_SESSION['mot_name']=$user[9];
					$_SESSION['fat_occ']=$user[11];
					$_SESSION['mot_occ']=$user[12];
					$_SESSION['pmob']=$user[10];
					$_SESSION['nationality']=$user[13];
					$id=$_SESSION['id'];
					$sqla ="INSERT INTO attendance(id) VALUES ($id)";
					$sqlm="INSERT INTO marks (id) VALUES ($id)";
					mysqli_query($conn, $sqla);
					mysqli_query($conn, $sqlm);
					header("Location:academic.php");
			}
				} 
		else
		{
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
			
	}
	
	
	mysqli_close($conn);

?>