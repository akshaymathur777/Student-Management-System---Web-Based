<?php 
	session_start();
	include('connection.php');
	$id=$_POST['sid'];
	$id=$_POST['st_id'];
	$marks=$_POST['marks'];
	$sub=$_SESSION['course_selected'];

	$get_s="SELECT * from subjects where id=$id";
	$res_s=$conn->query($get_s);
	$row_s=$res_s->fetch_row();
	$s1=$row_s[1];
	$s2=$row_s[2];
	$s3=$row_s[3];
	$s4=$row_s[4];
	$s5=$row_s[5];
	$s6=$row_s[6];

	if(strcmp($sub,$s1)==0)
	{
		$sql="UPDATE marks set sub1=$marks where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Marks Updated";
		$gpa_up="UPDATE academic_details set cgpa=$gpa where id=$id";
		mysqli_query($conn, $gpa_up);
	}
	elseif(strcmp($sub,$s2)==0)
	{
		$sql="UPDATE marks set sub2=$marks where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Marks Updated";
		$gpa_up="UPDATE academic_details set cgpa=$gpa where id=$id";
		mysqli_query($conn, $gpa_up);
	}
	elseif(strcmp($sub,$s3)==0)
	{
		$sql="UPDATE marks set sub3=$marks where id=$id";	
		mysqli_query($conn, $sql);
		$gpa_up="UPDATE academic_details set cgpa=$gpa where id=$id";
		mysqli_query($conn, $gpa_up);
		$_SESSION['message']="Marks Updated";
	}
	elseif(strcmp($sub,$s4)==0)
	{
		$sql="UPDATE marks set sub4=$marks where id=$id";	
		mysqli_query($conn, $sql);
		$gpa_up="UPDATE academic_details set cgpa=$gpa where id=$id";
		mysqli_query($conn, $gpa_up);
		$_SESSION['message']="Marks Updated";
	}
	elseif(strcmp($sub,$s5)==0)
	{
		$sql="UPDATE marks set sub5=$marks where id=$id";	
		mysqli_query($conn, $sql);
		$gpa_up="UPDATE academic_details set cgpa=$gpa where id=$id";
		mysqli_query($conn, $gpa_up);
		$_SESSION['message']="Marks Updated";
	}
	elseif(strcmp($sub,$s6)==0)
	{
		$sql="UPDATE marks set sub6=$marks where id=$id";	
		mysqli_query($conn, $sql);
		$gpa_up="UPDATE academic_details set cgpa=$gpa where id=$id";
		mysqli_query($conn, $gpa_up);
		$_SESSION['message']="Marks Updated";
	}
	else
	{
		$_SESSION['message']="Invalid Input";
	}
	header("Location:enter_sub_marks.php");
?>