<?php
if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];
    $conn=new mysqli('localhost', 'root', '', 'jobs');
    $sql="INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$position','$Jdesc','$skills','$CTC')";
    if(mysqli_query($conn, $sql)){
        echo "New Job Posted";
    }
    else{
        echo "ERROR: Failed to Post the Job $sql. " . mysqli_error($conn);
    }
}
?>