<?php 
	session_start();
	include('connection.php');
	$id=$_POST['sid'];
	$id=$_POST['st_id'];
	$tot=$_POST['tot'];
	$sub=$_SESSION['course_selected'];
	$att=$_POST['att'];
	$per=($att/$tot)*100;

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
		$sql="UPDATE attendance set totsub1=$tot,attsub1=$att,persub1=$per where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Attendance Updated";
	}
	elseif(strcmp($sub,$s2)==0)
	{
		$sql="UPDATE attendance set totsub2=$tot,attsub2=$att,persub2=$per where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Attendance Updated";
	}
	elseif(strcmp($sub,$s3)==0)
	{
		$sql="UPDATE attendance set totsub3=$tot,attsub3=$att,persub3=$per where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Attendance Updated";
	}
	elseif(strcmp($sub,$s4)==0)
	{
		$sql="UPDATE attendance set totsub4=$tot,attsub4=$att,persub4=$per where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Attendance Updated";
	}
	elseif(strcmp($sub,$s5)==0)
	{
		$sql="UPDATE attendance set totsub5=$tot,attsub5=$att,persub5=$per where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Attendance Updated";
	}
	elseif(strcmp($sub,$s6)==0)
	{
		$sql="UPDATE attendance set totsub6=$tot,attsub6=$att,persub6=$per where id=$id";
		mysqli_query($conn, $sql);
		$_SESSION['message']="Attendance Updated";
	}
	else
	{
		$_SESSION['message']="Invalid Input";
	}
	header("Location:enter_sub_att.php");
?>