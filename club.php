<?php 


	include("connection1.php");
  if(isset($_POST['submit'])){
    $clubname=$_POST['clubname'];

    $sql = "insert into `clubs` (club_name) values('$clubname')";
    $result = mysqli_query($con,$sql);
    if($result){
      echo "Data insterted successful";
    }else{
      die(mysqli_error($con));
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
  <div class="container">
      <form method="post">
          <div class="form-group">
            <label >club_name</label>
            <input type="text" name="clubname" class="form-control">
          </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
</body>
</html>