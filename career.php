<?php include 'apply.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .one{
        background-image:  url('bg1.jpg');
        background-size: cover;
        padding: 150px;
        filter: blur(2px);
        -webkit-filter: blur(2px);
        box-sizing: border-box;
       }
       
       .content{
        background-color: rgb(0,0,0); 
        background-color: rgba(0,0,0, 0.4); 
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
       }
       .jobs{
        padding: 20px;
        margin: 20px;
        border: 3px solid black;
        box-shadow: 10px 10px #888888;
        border-radius: 10px;
       }
       </style>
    
    <title>Career</title>
</head>
<body>
 
<div class="one"></div>
<div class="content">
    <h2 style="font-size:50px">Job Portal</h2>
    <p>Best jobs available matching your skills.</p>
    </div>
<div class="row">
  <?php
  $conn=new mysqli('localhost', 'root', '', 'jobs');
  $sql="SELECT `cname`, `position`, `Jdesc`, `CTC`, `skills` from `jobs`";
  $result=mysqli_query($conn, $sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo'
      <div class="col-md-4">
      <div class="jobs">
      <h3 style="text-align: center;">'.$rows['position'].'</h3>
      <h4 style="text-align: center;">'.$rows['cname'].'</h4>
      <p style="color: black; text-align: justify;">'.$rows['Jdesc'].'</p>
      <p style="color: black;"><b>Skills Required</b>'.$rows['skills'].'</p>
      <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
      Apply Now  
      </button>
      </div>
      </div>';
    }
  }
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply for jobs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

   


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>