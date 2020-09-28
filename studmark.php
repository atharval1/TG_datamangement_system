<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>TG Data Management</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body class="bg-light">
   
  <nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
  <a class="navbar-brand" href="#">TG Datamanagement System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="teacherwelcome.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="stud1.php">Student details</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="studmark.php">Add Student marks</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="marksdisplay.php">Display Student marks</a>
      </li>
     
     
    </ul>
  </div>
</nav>


    <div class="heading container text-center pt-2">
        <a href="logout.php" class="btn btn-light rounded shadow p-1 m-1 border border-dark">Sign Out of Your Account</a>
        <a href="teacherwelcome.php" class="btn btn-light shadow p-1 m-1 border border-dark">BACK TO TEACHER SECTION</a>
        <a href="marksdisplay.php" class="btn btn-light shadow p-1 m-1 border border-dark">DISPLAY MARK</a>
    </div>

    <div class="container pt-3">
        <h3 class="text-center ">Please fill the information of student marks</h3>
        <hr>
        <form id="login-form" class="form" action="" method="post">
            <div class="form-group col-md-12 ">
                <label for="user" class="w-100">Name:</lable></br>
                <input type="text" name="name" id="user" class="form-control w-50" required>
            </div>

            <div class="form-group col-md-12">
                <label for="marks" class="text">DBMS:</label><br>
                <input type="number" name="dbms" id="dbms" class="form-control w-50" required>
            </div>

            <div class="form-group col-md-12">
                <label for="marks" class="text">ISEE:</label><br>
                <input type="number" name="isee" id="dbms" class="form-control w-50"required>
            </div>

            <div class="form-group col-md-12">
                <label for="marks" class="text">CN:</label><br>
                <input type="number" name="cn" id="cn" class="form-control w-50" required>
            </div>

            <div class="form-group col-md-12">
                <label for="marks" class="text">SEPM:</label><br>
                <input type="number" name="sepm" id="sepm" class="form-control w-50" required>
            </div>

            <div class="form-group col-md-12">
                <label for="marks" class="text">TOC:</label><br>
                <input type="number" name="toc" id="toc" class="form-control w-50" required>
            </div>
        
            <div class="form-group col-md-12 text-center">
                <input type="submit" name="submit" value="submit" class="btn btn-info text-center">
            </div>
        </form>
        
    </div>



<?php
include 'config.php';
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $dbms = $_POST['dbms'];
    $isee = $_POST['isee'];
    $cn = $_POST['cn'];
    $sepm = $_POST['sepm'];
    $toc = $_POST['toc'];

    $q = "INSERT INTO `mark`(`name`, `dbms`, `isee`, `cn`, `sepm`, `toc`) VALUES ('$name','$dbms','$isee','$cn','$sepm','$toc')";
    $res = mysqli_query($link,$q);
    if($res){
        ?>
        <script>
            alert("data submitted properly");
        </script>
        <?php 
    }else{
        ?>
        <script>
            alert("data not insrted properly");
        </script>
        <?php
    }
}
?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>