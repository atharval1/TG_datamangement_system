<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TG Data Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    <link rel="stylesheet" href="main.css">
    <style type="text/css">
        body{ font: 14px sans-serif; 
              /* text-align: center;  */
        }
    </style>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body class="bg-white">

<nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
  <a class="navbar-brand" href="#">TG Datamanagement System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="marks.php">Marks</a>
      </li>
     
     
    </ul>
  </div>
</nav>


        <div class="container pt-2">
    <div class="page-header text-center">
        <h2 class="font-weight-bolder">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site TG Datamanagment System.</h2>
    </div>
    </div>
    <p class="text-center">
        <a href="reset-password.php" class="btn btn-light rounded border border-dark p-1 m-1">Reset Your Password</a>
        <a href="logout.php" class="btn btn-light rounded border border-dark p-1 m-1">Sign Out of Your Account</a>
    </p>
    
    
     <h2 class="text-center text-muted" style="font-family:'Josefin Sans', sans-serif;;">Student Data Management</h2>
     

<br>

<div class="container pb-3">
        <div class="row justify-content-center align-items-center w-100">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="user" class="w-100">Name:</lable></br>
            <input type="text" name="username" id="user" class="form-control w-100">
            </div>
            <div class="form-group">
                <label for="emailid" class="w-100">Email-Id:</label><br>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="mobNumber" class="w-100">Mobile No:</label><br>
                <input type="number" name="mobile" id="mobNumber" class="form-control">
            </div>
            <div class="form-group">
                <label for="Rollno" class="w-100">Roll No:</label><br>
                <input type="number" name="roll" id="Rollno" class="form-control">
            </div>
            <div class="form-group">
                <label for="class" class="w-100">Class:</label><br>
                <input type="text" name="class" id="class" class="form-control">
            </div>
            <div class="form-group">
                <label for="Dob" class="w-100">Date Of Birth:</label><br>
                <input type="number" name="dob" id="Dob" class="form-control">
            </div>
            <div class="form-group">
                <label for="Fathername" class="w-100">Father Name:</label><br>
                <input type="text" name="father" id="Fathername" class="form-control">
            </div>
            <div class="form-group">
                <label for="Mothername" class="w-100">Mother Name:</label><br>
                <input type="text" name="mother" id="Mothername" class="form-control">
            </div>
            <div class="form-group">
                <label for="Address" class="w-100">Address:</label><br>
                <input type="text" name="address" id="Address" class="form-control">
            </div>
            <div class="form-group">
            <label for="user">Profile pic:</lable>
            <input type="file" name="file" id="file" class="form-control">
            </div>

            <input type="submit" name="submit" value="submit" class="btn btn-warning">
        </form>
        </div>
</div>

   
   


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>



