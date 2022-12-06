<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone_no'];
$password=$_POST['password'];

$conn=new mysqli('localhost', 'root', '', 'jobs');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("INSERT INTO `users`(`Name`, `Email`, `Phone_no` , `Password`) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $number, $password);
    $execval=$stmt->execute();
    echo $execval;
    $stmt->close();
    $conn->close();
}

?>