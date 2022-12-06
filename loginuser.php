<?php
session_start();
$conn=new mysqli('localhost', 'root', '', 'jobs');
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `Email`='$email' AND `Password`='$password'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='Email id or Password is incorrect';
    }
}
?>