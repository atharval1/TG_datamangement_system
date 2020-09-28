<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>TG Data Management</title>
  </head>
  <body class="bg-light">
   

    
            <?php
                 include 'config.php';
                
                 if(isset($_POST['submit'])){

                    $username = $_POST['username'];

                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $rollno = $_POST['roll'];
                    $class = $_POST['class'];
                    $dob = $_POST['dob'];
                    $father = $_POST['father'];
                    $mother = $_POST['mother'];
                    $address = $_POST['address'];

                    $files = $_FILES['file'];

                   
                    //print_r($files);

                    $filename = $files['name'];
                    // print_r($filename);
                    $fileerror = $files['error'];
                    $filetmp = $files['tmp_name'];

                    $fileext = explode('.',$filename);
                    $filecheck = strtolower(end($fileext));

                    $fileextstored = array('png','jpg','jpeg');

                    if(in_array($filecheck,$fileextstored)){

                        $destinationfile = 'upload/'.$filename;
                        move_uploaded_file($filetmp,$destinationfile);

                        $q = "INSERT INTO `img`(`username`, `image`, `email`, `mobile`, `roll`, `class`, `dob`, `father`, `mother`, `address`) VALUES ('$username','$destinationfile','$email','$mobile','$rollno','$class','$dob','$father','$mother','$address')";

                        $query = mysqli_query($link,$q);

                        $displayquery = "select * from img";
                        $querydisplay =mysqli_query($link,$displayquery);

                        //$row = mysqli_num_rows($querydisplay);

                      
                    }else{
                        echo "extension not matching ";
                    }


                 }
                 ?>




 
<div class="heading container text-center pt-3">
        <a href="logout.php" class="btn btn-info rounded shadow p-1 m-1">Sign Out of Your Account</a>
  </div>

  <div class="container text-center pt-3 text-info">
    <h1>
                 <?php
                    print_r($username);
                    echo "<br>"; 
                  ?>
    </h1>
   <h2 class="text-dark">data submited successfully........</h2>
   <h3 class="text-dark">Plesase log out the session ..</h3>
 </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>