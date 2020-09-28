<?php

include 'config.php';

if(isset($_POST['done'])){

    $id = $_GET['id'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $rollno = $_POST['roll'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $address = $_POST['address'];

 $q = " update img set username='$username', mobile='$mobile', email='$email', roll='$rollno', father='$father', mother='$mother', address='$address' where id=$id  ";

 $query = mysqli_query($link,$q);
 header('location:stud.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>TG Data Management</title>
<link rel="stylesheet" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
  <a class="navbar-brand" href="#">TG Datamanagement System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="hodwelcome.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="stud.php">Student details</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="marksdisplay1.php">Display Student marks</a>
      </li>
     
     
    </ul>
  </div>
</nav>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card m-1 p-1">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Data </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> mobile: </label>
 <input type="text" name="mobile" class="form-control"> <br>

 <label> Email: </label>
 <input type="email" name="email" class="form-control"><br>

 <label> Roll No: </label>
 <input type="number" name="roll" class="form-control"><br>
 
 <label> Father Name: </label>
 <input type="text" name="father" class="form-control"><br>

 <label> Mother Name: </label>
 <input type="text" name="mother" class="form-control"><br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"><br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>