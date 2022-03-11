<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// create a connection object

$con = mysqli_connect($servername, $username, $password, $database);


if(!$con){
    die("connecting to database failed");
}
else{
// echo "Connection was successful";
}

$sqlclear = "DELETE FROM `notes` WHERE 1";
mysqli_query($con, $sqlclear);

$sqlreset = "alter table notes AUTO_INCREMENT=1";
mysqli_query($con, $sqlreset);

header("Location: ./index.php");

mysqli_close($con);


?>