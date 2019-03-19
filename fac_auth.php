<?php
	session_start();
	include('connection.php');
	$u_mail=$_POST["log_id"];
	$u_pass=$_POST["log_pass"];

	
	$sql="SELECT * FROM professor WHERE email='$u_mail' and pwd='$u_pass'";
	$result = $conn->query($sql);
	//echo $result;
	$user=$result->fetch_row();	
	if($user)
	{
		$_SESSION['fname']=$user[1];
		$_SESSION['lname']=$user[2];
		$_SESSION['email']=$user[7];
		$_SESSION['id']=$user[0];
		$_SESSION['dob']=$user[4];
		$_SESSION['gender']=$user[5];
		$_SESSION['mobile']=$user[7];
		$_SESSION['address']=$user[6];
		$_SESSION['email']=$user[8];
		$_SESSION['nationality']=$user[9];
		$_SESSION['dept_id']=$user[11];
		$_SESSION['qual']=$user[3];
		$id=$_SESSION['id'];
		$dept_id=$_SESSION['dept_id'];
		$_SESSION['message']="Logged in Successfully";
		
		$get_dept="SELECT * FROM department where dept_id='$dept_id'";
		$res_dept=$conn->query($get_dept);
		$dept=$res_dept->fetch_row();
		$_SESSION['dept']=$dept[1];


		header("Location:fac_dashboard.php");
	}
	else
	{
		$_SESSION['message']="Incorrect Username or Password";
		header("Location:faculty_index.php");
	}
	//if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
      //  echo "hi";
    //}
//} else {
  //  echo "0 results";

//$conn->close();
?>