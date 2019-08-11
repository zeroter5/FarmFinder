<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "FarmFinder";

$myConnection= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName) or die ("could not connect to mysql"); 
    $filename=$_FILES["productsCSV"]["tmp_name"];    
    //error_log($filename);
     if($_FILES["productsCSV"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT INTO products (type,grade,price,name,organic,supplierName) 
                   VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."');";
                   mysqli_query($myConnection,$sql);
                
           }
      
           fclose($file);  
     }
   sleep(1);
   mysqli_close($myConnection);

 ?>