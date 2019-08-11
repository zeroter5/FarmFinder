<?php
 //if(isset($_POST["psubmit"])){
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "FarmFinder";

$myConnection= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName) or die ("could not connect to mysql"); 
if (isset($_POST['submit'])) {

    $type = $_POST["type"];
    $grade = $_POST["grade"];
    $organic = $_POST["organic"];
    $price = $_POST["price"];
    $name = $_POST["name"];
}
  $sql = "SELECT supplierName, about FROM suppliers WHERE supplierName IN (SELECT supplierName FROM products WHERE grade = '$type' OR organic = '$organic' OR type = '$type' OR supplierName = '$name')"; 

    if($res = mysqli_query($myConnection,$sql)){
              //error_log($res + "1");

      if (mysqli_num_rows($res) > 0) {
    $table= array();
    while ($row = mysqli_fetch_array($res)) {
        array_push($table,array(
            'supplierName'=>$row['supplierName'],
            'about'=>$row['about']
        ));
    }
    echo json_encode($table);
    //echo($table);
}
      //mysqli_free_result($res);
      error_log("here");
    }

   sleep(1);
   mysqli_close($myConnection);

 ?>