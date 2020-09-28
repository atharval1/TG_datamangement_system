<?php

include 'config.php';

$selectquery = "select * from register";

$query = mysqli_query($link,$selectquery);

$nums = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
    echo $res['emailid'] . "<br>";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
    <title>TG Datamanagement System</title>
  </head>
  <body>
    
<div class="main-div">
     <h1 class="text-info">list of student information</h1>

     <div class="center-div">
         <div class="table-responsive">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email iD</th>
                     <th>Mobile No</th>
                     <th>Roll No</th>
                     <th>Class</th>
                     <th>DOB</th>
                     <th>Father</th>
                     <th>Mother</th>
                     <th>Address</th>
                     <th>Image</th>
                     <th>operation</th>
                 </tr>
             </thead>
             <br>
            <tbody>
            <?php

                            include 'config.php';

                            $selectquery = "select * from register";

                            $query = mysqli_query($link,$selectquery);

                            $nums = mysqli_num_rows($query);

                            $res = mysqli_fetch_array($query);

                            while($res = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $res['emailid']?><td>
                    <td><?php echo $res['image']?><td>
                    <td><?php $res['emailid']?><td>
                    <td><i class="far fa-edit"></i></td>
                    <td><i class="fas fa-trash"></i></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
         </div>
     </div>
</div>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>