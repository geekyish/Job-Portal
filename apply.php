<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    $conn=new mysqli('localhost', 'root', '', 'jobs');
    $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply', '$qual', '$year')";
    mysqli_query($conn, $sql);
}
?>