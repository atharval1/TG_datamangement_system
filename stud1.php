<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "demo";
   
   
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
   
   $sql = "SELECT * FROM img";
   $result = mysqli_query($conn, $sql);
    
      
   		
   		
   		?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <title>TG Data Management</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>
   <style>
   .col-sm-6{text-align:Center}
   .col-sm-12{text-align:Center}
   </style>
   
   <body class="bg-light">
   
   
   <nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
  <a class="navbar-brand" href="#">TG Datamanagement System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="teacherwelcome.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
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


    <h2 class="text-center"> Data Management Teacher Section</h2>
    <p class="text-center">
        <!-- <a href="reset-password.php" class="btn btn-warning shadow">Reset Your Password</a> -->
        <a href="logouthod.php" class="btn btn-light shadow p-1 m-1 border border-dark">Sign Out of Your Account</a>
        <a href="teacherwelcome.php" class="btn btn-light shadow p-1 m-1 border border-dark">BACK TO TEACHER SECTION</a>
    </p>
   <h3 class="text-center">Student data information</h3>
   <div class="container text-right">
    <a href="export1.php" class="btn btn-warning rounded shadow p-2 m-1  border border-dark">Export Data</a>
    </div>
      <div class="container">
         <table class="table table-striped">
            <thead>
               <tr>
                   <th>Id</th>
                  <th>Name</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                  ?>
               <tr>
                   <td><?php echo $row['id']?></td>
                  <td> <?php echo $row["username"] ?></td>
                  <td><a href='javascript:void(0)' class="btn btn-info get_id" data-id='<?php echo $row["id"] ?>' data-toggle="modal" data-target="#myModal">details</a></td>
                  <td><button class="btn-info btn m-0"><a href="delete2.php?id=<?php echo $row['id'];?>" class="text-white">Delete</a></button></td>
                  <td><button class="btn-info btn"><a href="updated1.php?id=<?php echo $row['id'];?>" class="text-white">Update</a></button></td>
               </tr>
               <?php	
                  }
                  ?>
            </tbody>
         </table>
      </div>
      <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               
               <div class="modal-body" id="load_data">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-info" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <script>
	  
	  $(document).ready(function(){
		  $(".get_id").click(function(){
			  var ids = $(this).data('id');
			   $.ajax({
				   url:"update.php",
				   method:'POST',
				   data:{id:ids},
				   success:function(data){
					   
					   $('#load_data').html(data);
				   
				   }
				   
			   })
		  })
		  
	  })
	  
	  
	  
	  
	  
	  
	  </script>
   </body>
</html>
<?php
   mysqli_close($conn);
   ?>



   <!-- <?php echo $row["roll"] ?> -->