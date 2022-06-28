<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mail = $_POST['Mail'];
	$mnum = $_POST['mnumber'];
	$dob = $_POST['dnumber'];
	$gen = $_POST['gen'];
	$fa = $_POST['father'];
	$mom = $_POST['mother'];
	$add=$_POST['add'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$hobby = $_POST['Hobby'];
	$High = $_POST['High'];
	$dept = $_POST['dept'];
	$course= $_POST['course'];


	$dbhost ="localhost";
	$dbuser ="root";
	$dbpass ="";
	$db = "mydata";
	$con =  mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	$chk="";

	foreach ($hobby as $chk1) 
	{
		$chk.= $chk1.",";
	}
	
	$sql = "INSERT INTO project(ID,FIRST_NAME,LAST_NAME,MAIL,MOBILE,DATE_OF_BIRTH,
	GENDER,FATHER_NAME,MOTHER_NAME,ADDRESS,CITY,STATE,DEPARTMENT,COURSE,HOBBY,SCHOOLING)
	 		
	 		values('0','$fname','$lname','$mail','$mnum','$dob',
	 	'$gen','$fa','$mom','$add','$city','$state','$dept','$course','$chk','$High')";
	
	if($con->query( $sql))
	{
		echo '<script> alert ("Submitted Successfully..!")</script>';	
	}
	else
	{
		echo "error".sql. $con->error;
	}
$con->close();

?>
