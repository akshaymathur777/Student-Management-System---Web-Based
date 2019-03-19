<?php 
	session_start();
	include('connection.php');
	$id=$_POST['st_id'];
	$sub=$_SESSION['course_selected'];
	if($_POST['att']=='P')
		$attended=1;
	else
		$attended=0;

	$get_s="SELECT * from subjects where id=$id";
	$res_s=$conn->query($get_s);
	$row_s=$res_s->fetch_row();
	$s1=$row_s[1];
	$s2=$row_s[2];
	$s3=$row_s[3];
	$s4=$row_s[4];
	$s5=$row_s[5];
	$s6=$row_s[6];

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

	if(strcmp($sub,$s1)==0)
	{
		$att=$att1;
		$tot=$tot1+1;
		if($attended==1)
		{
			
			$att=$att+1;	
		}	
		$per=($att/$tot)*100;
		$sql="UPDATE attendance set totsub1=$tot,attsub1=$att,persub1=$per where id=$id";
		mysqli_query($conn, $sql);
	}
	
	elseif(strcmp($sub,$s2)==0)
	{
		$att=$att2;
		$tot=$tot2+1;
		if($attended==1)
		{
			
			$att=$att+1;	
		}	
		$per=($att/$tot)*100;
		$sql="UPDATE attendance set totsub2=$tot,attsub2=$att,persub2=$per where id=$id";
		mysqli_query($conn, $sql);
	}
	elseif(strcmp($sub,$s3)==0)
	{
		$att=$att3;
		$tot=$tot3+1;
		if($attended==1)
		{
			
			$att=$att+1;	
		}	
		$per=($att/$tot)*100;
		$sql="UPDATE attendance set totsub3=$tot,attsub3=$att,persub3=$per where id=$id";
		mysqli_query($conn, $sql);
	}
	elseif(strcmp($sub,$s4)==0)
	{
		$att=$att4;
		$tot=$tot4+1;
		if($attended==1)
		{
			
			$att=$att+1;	
		}	
		$per=($att/$tot)*100;
		$sql="UPDATE attendance set totsub4=$tot,attsub4=$att,persub4=$per where id=$id";
		mysqli_query($conn, $sql);
	}
	elseif(strcmp($sub,$s5)==0)
	{
		$att=$att5;
		$tot=$tot5+1;
		if($attended==1)
		{
			
			$att=$att+1;	
		}	
		$per=($att/$tot)*100;
		$sql="UPDATE attendance set totsub5=$tot,attsub5=$att,persub5=$per where id=$id";
		mysqli_query($conn, $sql);
	}
	elseif(strcmp($sub,$s6)==0)
	{ 
		$att=$att6;
		$tot=$tot6+1;
		if($attended==1)
		{
			
			$att=$att+1;	
		}	
		$per=($att/$tot)*100;
		$sql="UPDATE attendance set totsub6=$tot,attsub6=$att,persub6=$per where id=$id";
		mysqli_query($conn, $sql);
	}
	else
	{
		$_SESSION['message']="Invalid Input";
	}
	header("Location:enter_class_att.php");
?>