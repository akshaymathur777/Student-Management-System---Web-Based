<?php
	session_start();
	include('connection.php');
	$id=$_SESSION['id'];
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];
	$prev_institution=$_POST["prev"];
	$qualexam=$_POST["qualexam"];
	$board=$_POST["prevboard"];
	$passyr=$_POST["passyr"];
	$program=$_POST["progs"];
	$dept=$_POST["stream"];
	$sem=$_SESSION['sem'];
	
	/*if(strcmp($program,"CSE"))
		$dept=1;
	elseif(strcmp($program,"IT"))
		$dept=2;
	elseif(strcmp($program,"MECH"))
		$dept=3;
	elseif(strcmp($program,"ECE"))
		$dept=4;
	elseif(strcmp($program,"EEE"))
		$dept=5;
	elseif(strcmp($program,"MECHA"))
		$dept=6;
	elseif(strcmp($program,"CIVIL"))
		$dept=7;
	elseif(strcmp($program,"CHEM"))
		$dept=8;
	elseif(strcmp($program,"AUTO"))
		$dept=9;
	*/
	if($sem==1)
	{
		$sub1="Engineering Physics";
		$sub2="Engineering Mathematics-1";
		$sub3="Engineering Graphics";
		$sub4="Mechanics Of Solids";
		$sub5="Basic Electronics";
		$sub6="Basic Workshop Practices";
	}
	elseif($sem==2)
	{
		$sub1="Engineering Chemistry";
		$sub2="Engineering Mathematics-2";
		$sub3="Programming using C";
		$sub4="Engineering Thermodynamics";
		$sub5="Basic Electrical Technologies";
		$sub6="Technical Communication";
	}
	elseif($sem==3 && ($dept==1 || $dept==2 || $dept==4))
	{
		$sub1="Data Structures";
		$sub2="Engineering Mathematics-3";
		$sub3="Object Oriented Programming using Java";
		$sub4="Computer Organization and Architecture";
		$sub5="Switching Theory and Logic Design";
		$sub6="Humanities Elective";
	}
	elseif($sem==4 && ($dept==1 || $dept==2 || $dept==4))
	{
		$sub1="Operating Systems";
		$sub2="Engineering Mathematics-4";
		$sub3="Relational Database Management System";
		$sub4="Microprocessors and Microcontrollers";
		$sub5="Economics";
		$sub6="Open Elective";
	}
	elseif($sem==3 && $dept==3)
	{
		$sub1="Metarials Science and Engineering";
		$sub2="Engineering Mathematics-3";
		$sub3="Kinematics of Machines";
		$sub4="Applied Thermodynamics";
		$sub5="Strength of Metarials";
		$sub6="Economics";
	}
	elseif($sem==4 && $dept==3)
	{
		$sub1="Dynamics of Machinery";
		$sub2="Heat Transfer";
		$sub3="Fluid Mechanics and Hydraulic Machines";
		$sub4="Manufacturing Process Engineering";
		$sub5="Machine Drawing";
		$sub6="Open Elective";
	}
	elseif($sem==3 && $dept==5)
	{
		$sub1="Electrical Circuit Analysis";
		$sub2="Engineering Mathematics-3";
		$sub3="Digital Electronic Circuits";
		$sub4="Electric Machinery";
		$sub5="Analog Electric Circuits";
		$sub6="Open Elective";
	}
	elseif($sem==4 && $dept==5)
	{
		$sub1="Signals and Systems";
		$sub2="Engineering Mathematics-4";
		$sub3="Analog Systems Design";
		$sub4="Digital System Design and Computer Architecture";
		$sub5="Integrated Electronics";
		$sub6="Open Elective";
	}
	elseif($sem==3 && $dept==6)
	{
		$sub1="History of Indian Science and Technology";
		$sub2="Engineering Mathematics-3";
		$sub3="Strength of Metarials";
		$sub4="Electronics Measurement and Instrumentation";
		$sub5="Analog Design";
		$sub6="Open Elective";
	}
	elseif($sem==4 && $dept==6)
	{
		$sub1="Design of Machine Elements";
		$sub2="Engineering Mathematics-4";
		$sub3="Fluid Mechanics and Machines";
		$sub4="Digital System Design";
		$sub5="Integrated Electronic";
		$sub6="Open Elective";
	}
	elseif($sem==3 && $dept==7)
	{
		$sub1="Fluid Mechanics";
		$sub2="Engineering Mathematics-3";
		$sub3="Structural Analysis";
		$sub4="Building Science and Technology";
		$sub5="Engineering Geology";
		$sub6="Open Elective";
	}
	elseif($sem==4 && $dept==7)
	{
		$sub1="Geotechnical Engineering";
		$sub2="Engineering Mathematics-4";
		$sub3="Water Resource Engineering";
		$sub4="Environmental Engineering";
		$sub5="Transportation Engineering";
		$sub6="Open Elective";
	}
	elseif($sem==3 && $dept==8)
	{
		$sub1="Organic Chemistry";
		$sub2="Engineering Mathematics-3";
		$sub3="Chemical Process Calculations";
		$sub4="Momentum Transfer";
		$sub5="Process Synthesis";
		$sub6="Open Elective";
	}
	elseif($sem==4 && $dept==8)
	{
		$sub1="Transport Phenomena";
		$sub2="Engineering Mathematics-4";
		$sub3="Chemical Engineering Thermodynamics";
		$sub4="Numerical Methods in Chemical Engineering";
		$sub5="Physical and Analytical Chemistry";
		$sub6="Open Elective";
	}
	elseif($sem==3 && $dept==9)
	{
		$sub1="Modern Automotive Technology";
		$sub2="Engineering Mathematics-3";
		$sub3="Vehicle Fault Diagnosis and Testing";
		$sub4="Vehicle Dynamics and Stability Control";
		$sub5="Automotive Pollution and Control";
		$sub6="Open Elective";
	}
	elseif($sem==4 && $dept==9)
	{
		$sub1="Metarial Science and Metallurgy";
		$sub2="Engineering Mathematics-4";
		$sub3="Theory of Automotive Engines";
		$sub4="Kinematics and Dynamics of Automobiles";
		$sub5="Automotive Chassis System";
		$sub6="Open Elective";
	}
		$sql = "INSERT INTO academic_details(id,fname,lname,prev_institution,qual_exam,board, yr_of_passing, program,stream, semester,dept_id)
				VALUES ('$id','$fname','$lname','$prev_institution','$qualexam','$board','$passyr','$program','$stream','$sem','$dept')";
		if (mysqli_query($conn, $sql)) 
		{
			$sql_sub="INSERT INTO subjects(id,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$id','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6')";
			if(mysqli_query($conn,$sql_sub))
			{
				$_SESSION['message']='Successfully Created Account';
				session_destroy();
		    	header("Location:index.php");
			}		
		} 
		else
		{
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
			
?>