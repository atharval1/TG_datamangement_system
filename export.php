<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'demo');  
//$sql = "SELECT `id`,`name`,`dbms` FROM `mark`";  
$sql ="SELECT `id`, `name`, `dbms`, `isee`, `cn`, `sepm`, `toc` FROM `mark`";
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "First Name" . "\t" . "dbms" . "\t" . "isee" . "\t" . "cn" . "\t" . "sepm" . "\t" . "toc";  
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
header("Content-Disposition: attachment; filename=Marks_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 