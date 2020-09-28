<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="main.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>TG Data Management</title>
  </head>
  <body class="bg-white">
   
  <nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
  <a class="navbar-brand" href="#">TG Datamanagement System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="hodwelcome.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="stud.php">Student details</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="marksdisplay1.php">Display Student marks</a>
      </li>
     
      <li class="nav-item ">
        <a class="nav-link" href="help.php">Help section</a>
      </li>
     
    </ul>
  </div>
</nav>

    <div class="heading container text-center pt-3">
        <a href="logout.php" class="btn btn-light rounded shadow p-1 m-1 border border-dark">Sign Out of Your Account</a>
        <a href="hodwelcome.php" class="btn btn-light shadow p-1 m-1 border border-dark">BACK TO HOD SECTION</a>
    </div>

    <div class="container text-center p-2 m-1">
        <button class="bg-light border border-dark" onclick="window.print()" style="border-radius: 1rem;">&emsp;Print&emsp;</button>
    </div>

    <div class="container pt-4">
        <h3 class="text-center">Student Marks</h3>
        <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <div class="table-responsive-xl">
        
        
        <table class="table table-bordered table-hover rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">NAME</th>
                <th scope="col" class="text-center">DBMS</th>
                <th scope="col" class="text-center">ISEE</th>
                <th scope="col" class="text-center">CN</th>
                <th scope="col" class="text-center">SEPM</th>
                <th scope="col" class="text-center">TOC</th>
                <th scope="col" class="text-center">DELETE</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    include 'config.php';
                    $sele = "select * from mark";
                    $query = mysqli_query($link,$sele);
                    while($res = mysqli_fetch_array($query)){
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $res['id']?></th>
                <td class="text-center"><?php echo $res['name']?></td>
                <td class="text-center"><?php echo $res['dbms']?></td>
                <td class="text-center"><?php echo $res['isee']?></td>
                <td class="text-center"><?php echo $res['cn']?></td>
                <td class="text-center"><?php echo $res['sepm']?></td>
                <td class="text-center"><?php echo $res['toc']?></td>
                <td class="text-center"><button class="btn-info btn"><a href="delete1.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
        </div>
    </div>
    <div class="container text-center">
    <a href="export.php" class="btn btn-warning rounded shadow p-1 m-1  border border-dark">Export Data</a>
    </div>
  </body>
</html>