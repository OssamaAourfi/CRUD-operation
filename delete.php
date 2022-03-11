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
?>
<?php
    if(isset($_POST['srno'])){
        
$srno = $_POST['srno'];
$sqldelete = "DELETE FROM `crud`.`notes` WHERE `notes`.`Sr.No` = {$srno}";
$result = mysqli_query($con, $sqldelete);
    }

if(isset($result)){
header("Location: ./index.php");
}



function oncall(){
   
?>
<hr>
<form action="delete.php" method="POST">
    Please enter the serial number:<br> <input type='number' name='srno'><br>
    <button class="sub">submit</button>
</form>
<hr>
<?php
}
?>
<?php oncall(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletion in CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="selection">
        <?php

    $sqlselect = "SELECT * FROM `notes`;";
    $result = mysqli_query($con, $sqlselect);
?>
        <h1>Your Notes</h1>
        <table>
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Time</th>

                </tr>
            </thead>
            <tbody>

                <?php
    while($row = mysqli_fetch_assoc($result)){
        echo " <tr>
        <td>".$row['Sr.No']."</td>
        <td>".$row['title']."</td>
        <td>".$row['descr']."</td>
        <td>".$row['Time']."</td>
    </tr>";        
   }
   mysqli_close($con);
   ?>
            </tbody>
        </table>
    </div>
</body>

</html>