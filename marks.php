<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="main.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
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
        <a class="nav-link" href="welcome.php">Home </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link " href="marks.php">Marks<span class="sr-only">(current)</span></a>
      </li>
     
     
    </ul>
  </div>
</nav>

    <div class="heading container text-center pt-3">
        <a href="logout.php" class="btn btn-light rounded border border-dark p-1 m-1">Sign Out of Your Account</a>
        <a href="welcome.php" class="btn btn-light border border-dark p-1 m-1">Back To Home</a>
    </div>
    <div class="container text-center p-2 m-1">
        <button class="bg-light border border-dark" onclick="window.print()" style="border-radius: 1rem;">&emsp;Print&emsp;</button>
    </div>

    <div class="container pt-4">
        <h3 class="text-center">Student Marks</h3>
        
        <div class="table-responsive-xl">
        <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
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
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>