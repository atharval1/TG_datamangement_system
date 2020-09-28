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

<body>
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

      <li class="nav-item">
        <a class="nav-link" href="marksdisplay1.php">Display Student marks</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="help.php">Help section</a>
      </li>
     
     
    </ul>
  </div>
</nav>

<p class="text-center pt-3">
        <!-- <a href="reset-password.php" class="btn btn-warning shadow">Reset Your Password</a> -->
        <a href="logouthod.php" class="btn btn-light shadow border border-dark">Sign Out of Your Account</a>
    </p>

<div class="container pt-3">
        <table class="table table-bordered table-hover rounded">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">NAME</th>
                <th scope="col" class="text-center">EMAIL</th>
                <th scope="col" class="text-center">MESSAGE</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    include 'config.php';
                    $sele = "select * from contact";
                    $query = mysqli_query($link,$sele);
                    while($res = mysqli_fetch_array($query)){
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $res['id']?></th>
                <td class="text-center"><?php echo $res['name']?></td>
                <td class="text-center"><?php echo $res['email']?></td>
                <td class="text-center"><?php echo $res['message']?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
      </form>
    </div>
    </div>

    




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>