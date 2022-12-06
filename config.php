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
    $stmt=$conn->prepare("INSERT INTO users(Name, Email, Phone_no , Password) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $number, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply', '$qual', '$year')";
    var_dump($sql);
    die();
    mysqli_query($conn, $sql);
}

?>