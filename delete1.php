<?php

include 'config.php';

$id = $_GET['id'];
print_r($id);

$q = "DELETE FROM `mark` WHERE id = $id";

mysqli_query($link,$q);

header('location:marksdisplay.php');


?>