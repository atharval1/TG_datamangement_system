<?php

include 'config.php';

$id = $_GET['id'];

$q = "DELETE FROM `img` WHERE id = $id";

mysqli_query($link,$q);

header('location:stud.php');


?>