<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "FarmFinder";

$myConnection= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName) or die ("could not connect to mysql"); 
    echo 'connected';
    
    if (isset($_POST['submit'])) {

    $about = $_POST["about"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $name = $_POST["name"];
    //$id = '31';

    $sql = "INSERT INTO Suppliers (about, address, phone, city, state,zip,suppliername)
    VALUES ('$about','$address','$phone','$city','$state','$zip','$name')";
    //}
}

    if (mysqli_query($myConnection, $sql)) {
    echo "New record created successfully";
} 

mysqli_close($myConnection);

?>
