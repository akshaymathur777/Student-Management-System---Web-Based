<?php
	session_start();
	include('connection.php');
	$u_mail=$_POST["log_id"];
	$u_pass=$_POST["log_pass"];

	
	$sql="SELECT * FROM student WHERE email='$u_mail' and pwd='$u_pass'";
	$result = $conn->query($sql);
	//echo $result;
	$user=$result->fetch_row();	
	if($user)
	{
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
		$_SESSION['message']="Logged in Successfully";
		$get_marks="SELECT * FROM marks where id='$id'";
		$res_marks=$conn->query($get_marks);
		$marks=$res_marks->fetch_row();
		$_SESSION['m1']=$marks[1];
		$_SESSION['m2']=$marks[2];
		$_SESSION['m3']=$marks[3];
		$_SESSION['m4']=$marks[4];
		$_SESSION['m5']=$marks[5];
		$_SESSION['m6']=$marks[6];
		
		$get_subjects="SELECT * FROM subjects where id='$id'";
		$res_sub=$conn->query($get_subjects);
		$subjects=$res_sub->fetch_row();
		$_SESSION['s1']=$subjects[1];
		$_SESSION['s2']=$subjects[2];
		$_SESSION['s3']=$subjects[3];
		$_SESSION['s4']=$subjects[4];
		$_SESSION['s5']=$subjects[5];
		$_SESSION['s6']=$subjects[6];

		$get_att="SELECT * FROM attendance where id='$id'";
		$res_att=$conn->query($get_att);
		$att=$res_att->fetch_row();
		$_SESSION['a1']=$att[3];
		$_SESSION['a2']=$att[6];
		$_SESSION['a3']=$att[9];
		$_SESSION['a4']=$att[12];
		$_SESSION['a5']=$att[15];
		$_SESSION['a6']=$att[18];
		
		header("Location:dashboard.php");
	}
	else
	{
		$_SESSION['message']="Incorrect Username or Password";
		header("Location:index.php");
	}
?>