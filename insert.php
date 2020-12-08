<?php
include 'connection.php';

if(isset($_POST['done'])){

 $alcode = $_POST['alcode'];
 $start = $_POST['start'];
 $end = $_POST['end'];
 $q= " INSERT INTO `goprac`(`alcode`, `start`, `end`) VALUES ('$alcode','$start','$end')";
 $query = mysqli_query($con,$q);
}

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Add New Record </h1>
 </div><br>

 <label> Code: </label>
 <input type="text" name="alcode" class="form-control"> <br>

 <label> Start Date: </label>
 <input type="date" name="start" class="form-control"> <br>
 <label> End Date: </label>
 <input type="date" name="end" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Update </button><br>

 </div>
 </form>
 </div>
</body>
</html>