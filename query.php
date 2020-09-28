<?php
include 'config.php';
                
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
     $text = $_POST['text'];

    $q = " INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$text') ";

    $query = mysqli_query($link,$q);

}
    header('location:index.php');


?>
