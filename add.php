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

$title = $_POST['title'];
$descr = $_POST['descr'];

if(isset($_POST['sub'])){

    if(empty($title)){
       
    }
    else{
    $sql = "INSERT INTO `crud`.`notes` (`Sr.No`, `title`, `descr`, `Time`) VALUES (NULL, '{$title}', '{$descr}', NOW());";
    mysqli_query($con,$sql);
    }
    }

    header("Location: ./index.php");

mysqli_close($con);

?>