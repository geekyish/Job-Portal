<?php
session_start();
	$sname = "localhost";
	$uname = "root";
	$password="";
    $Database="jobs";
	// Database connection
	$conn = mysqli_connect($sname, $uname, $password, $Database);
	if(isset($_POST['submit'])){
    mysqli_select_db($dbname,$conn);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];
    $query="INSERT INTO users(`Name`,`Email`, `Phone_no`, `Password`) VALUES ('[$name]','[$email]', '[$phone_no]', '[$phone_no]'";
    $run=mysqli_query($conn, $query);
    }
    
		
        ?>
