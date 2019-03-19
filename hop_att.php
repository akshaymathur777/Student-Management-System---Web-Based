<?php 
	session_start();
	if(!isset($_SESSION['fname'])|| empty($_SESSION['fname']))
	{
		header('location:faculty_index.php');
		exit;
	}
	$_SESSION['course_selected']=$_POST["sel_cname"];
	header("location:enter_sub_att.php");
?>