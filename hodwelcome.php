<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: hodlogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TG Data Management</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <a class="nav-link" href="stud.php">Student details</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="marksdisplay1.php">Display Student marks</a>
      </li>
     
      <li class="nav-item ">
        <a class="nav-link" href="help.php">Help section</a>
      </li>
     
    </ul>
  </div>
</nav>




    <div class="page-header text-center pt-3">
        <h2 class="font-weight-bolder">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site TG Datamanagment System.</h2>
    </div>
    <p class="text-center">
        <!-- <a href="reset-password.php" class="btn btn-warning shadow">Reset Your Password</a> -->
        <a href="logouthod.php" class="btn btn-light shadow border border-dark">Sign Out of Your Account</a>
    </p>
    <h2 class="text-dark text-center font-weight-bolder"> Data Management HOD Section</h2>
    <div class="container text-right">
    <h6>Date: <span id="datetime"></span></h6>
    <h6>Time: <span id="txt"></span></h6>
    </div>
        <h3 class="text-info text-center font-weight-bolder">Teacher Details</h3>
        

    <div class="container">
        <table class="table table-bordered table-hover rounded">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">NAME</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    include 'config.php';
                    $sele = "select * from teacher";
                    $query = mysqli_query($link,$sele);
                    while($res = mysqli_fetch_array($query)){
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $res['id']?></th>
                <td class="text-center"><?php echo $res['username']?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
    </div>

    <div class="container pt-3">
            <div class="heading text-center text-info">
                <a href="stud.php"><button type="button" class="btn btn-light mt-3 border border-dark">Student Details</button> </a>
                <a href="marksdisplay1.php"><button type="button" class="btn btn-light mt-3 border border-dark">Display student marks</button></a>
              </div>
    </div>
     
    <?php
    
    $sql = " SELECT count(id) AS total FROM img ";
    $query = mysqli_query($link,$sql);
    $values = mysqli_fetch_assoc($query);
    $rows = $values['total'];

    $sql1 = " SELECT count(id) AS total1 FROM mark ";
    $query1 = mysqli_query($link,$sql1);
    $values1 = mysqli_fetch_assoc($query1);
    $rows1 = $values1['total1'];

    $sql2 = " SELECT count(id) AS total2 FROM teacher ";
    $query2 = mysqli_query($link,$sql2);
    $values2 = mysqli_fetch_assoc($query2);
    $rows2 = $values2['total2'];

    ?>

<div class="container pt-3 pb-5">
        <div class="row">

        <div class="col-lg-4 img-float">
          <div class="card bg-light mb-3 border-dark" style="max-width: 18rem;">
          <div class="card-header bg-secondary text-white">Details...</div>
          <div class="card-body">
          <h5 class="card-title">Teachers</h5>
          <p class="card-text">Total number faculty present in department : <?php echo $rows2;?></p>
          </div>
          </div>
        </div>
            
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
          <div class="card bg-light mb-3 border-dark shadow" style="max-width: 18rem;">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


