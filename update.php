<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$output = '';
$rec_id = $_POST['id'];
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 

$sql = "SELECT * FROM img where id=".$rec_id;
$result = mysqli_query($conn, $sql);

 

   while($row = mysqli_fetch_assoc($result)) {
 
$output .= "<div class='row'><div class='container'><label>ID</label>: ".$row["id"]."</div></div> <div class='row'><div class='container text-dark'><label>Name:</label> ".$row["username"]."</div></div> <div class='row'><div class='container text-dark'><label>EMAIL:</label> ".$row["email"]."</div></div> <div class='row'><div class='container text-dark'><label>MOBILE NO:</label> ".$row["mobile"]."</div></div> <div class='row'><div class='container text-dark'><label>ROLL NO:</label> ".$row["roll"]."</div></div><div class='row'><div class='container text-dark'><label>CLASS:</label> ".$row["class"]."</div></div><div class='row'><div class='container text-dark'><label>DATE OF BIRTH:</label> ".$row["dob"]."</div></div> <div class='row'><div class='container text-dark'><label>FATHER NAME:</label> ".$row["father"]."</div></div> <div class='row'><div class='container text-dark'><label>MOTHER NAME:</label> ".$row["mother"]."</div></div> <div class='row'><div class='container text-dark'><label>ADDRESS:</label> ".$row["address"]."</div></div>   <div class='col-sm-12'><img src='".$row["image"]."' style='height:100px;width:100px;border-radius: 50%;text-align:Center'></div></div>";

 }
echo $output;
 
mysqli_close($conn);
?>
