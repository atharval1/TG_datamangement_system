<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'demo');  
//$sql = "SELECT `id`,`name`,`dbms` FROM `mark`";  
$sql ="SELECT `id`, `username`, `image`, `email`, `mobile`, `roll`, `class`, `dob`, `father`, `mother`, `address` FROM `img`";
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "Name" . "\t" . "Image" . "\t" . "Email" . "\t" . "Mobile NO" . "\t" . "Roll No" . "\t" . "Class" . "\t" . "DOB" . "\t" . "Father Name" . "\t" . "Mother Name" . "\t" . "Address";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Student_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 