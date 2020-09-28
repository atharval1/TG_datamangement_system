<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: teacherlogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TG Data Management</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style type="text/css">
        body{ font: 14px sans-serif; 
              /* text-align: center;  */
        }
    </style>
   
</head>
<body class="bg-white" onload="startTime()">

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
        <a class="nav-link" href="stud1.php">Student details</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="studmark.php">Add Student marks</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="marksdisplay.php">Display Student marks</a>
      </li>
     
     
    </ul>
  </div>
</nav>




    <div class="page-header text-center container pt-3">
        <h2 class="text">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site TG Datamanagment System.</h2>
    </div>
    <p class="text-center">
        <!-- <a href="reset-password.php" class="btn btn-warning shadow">Reset Your Password</a> -->
        <a href="logout.php" class="btn btn-light shadow border border-dark">Sign Out of Your Account</a>
        
    </p>
    <h2 class="text-dark text-center "> Data Management For Teacher Section</h2>
    <div class="container text-right">
    <h6>Date: <span id="datetime"></span></h6>
    <h6>Time: <span id="txt"></span></h6>
    </div>
    

    <div class="container text-center">
    
    <a href="stud1.php"><button type="button" class="btn btn-light mt-3 border border-dark">Student Details</button></a> 
     
    <a href="studmark.php"><button type="button" class="btn btn-light mt-3 border border-dark">Add student marks</button></a>
    
    <a href="marksdisplay.php"><button type="button" class="btn btn-light mt-3 border border-dark">Display student marks</button></a>
    
    </div>

    
    <?php
    
    include 'config.php';

    $sql = " SELECT count(id) AS total FROM img ";
    $query = mysqli_query($link,$sql);
    $values = mysqli_fetch_assoc($query);
    $rows = $values['total'];

    $sql1 = " SELECT count(id) AS total1 FROM mark ";
    $query1 = mysqli_query($link,$sql1);
    $values1 = mysqli_fetch_assoc($query1);
    $rows1 = $values1['total1'];

    ?>
    
    <!-- <h1 class="text-center"><?php echo $rows;?></h1> -->

   
    <div class="container pt-3 pb-5">
        <div class="row">
            
        <div class="col-lg-4 img-float">
          <div class="card bg-light mb-3 border-dark" style="max-width: 18rem;">
          <div class="card-header bg-secondary text-white">Details...</div>
          <div class="card-body">
          <h5 class="card-title">Students</h5>
          <p class="card-text">Total student who filled the regitration form : <?php echo $rows;?></p>
          </div>
          </div>
        </div>

        <div class="col-lg-4 img-float">
          <div class="card bg-light mb-3 border-dark" style="max-width: 18rem;">
          <div class="card-header bg-secondary text-white">Details...</div>
          <div class="card-body">
          <h5 class="card-title">Teacher</h5>
          <p class="card-text">Total student who getting marks from teacher : <?php echo $rows1;?></p>
          </div>
          </div>
        </div>


        </div>
    </div>


  


  
    
    
	  
	  
	  
	  
	  
	  
	







<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();

var dt = new Date();
document.getElementById("time").innerHTML = dt.toLocaleTimeString();

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>