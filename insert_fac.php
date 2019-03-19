<?php

	include('connection.php');
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$add=$_POST["address"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$pin=$_POST["pincode"];
	$country=$_POST["country"];
	$gen=$_POST["gen"];
	$dob=$_POST["dob"];
	$mob=$_POST["mob"];
	$mail=$_POST["email"];
	$nat=$_POST["nationality"];
	$pass=$_POST["pass"];
	$repass=$_POST["repass"];
	$post=$_POST["post"];
	$d_id=$_POST["dept_id"];
	$qual=$_POST["qualification"];
	$address="$add $city $state $pin $country";

	if ($pass==$repass)
	{
		$sql = "INSERT INTO professor(fname,lname,qual,dob, gender, address, mob, email, nationality, pwd,dept_id) VALUES ('$fname','$lname','$qual','$dob','$gen','$address','$mob','$mail','$nat','$pass','$d_id')";
		if (mysqli_query($conn, $sql)) 
		{
				$_SESSION['message']='Successfully Created Account';
				session_destroy();
		    	header("Location:faculty_index.php");
	   	} 
	   	else 
	   	{
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}	
	}
	mysqli_close($conn);
?>