<?php
$server = "localhost";
$userename= "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server,$userename,$password,$database);
if($conn)
{
    // echo " sussfully connected ";
}
else{
    die("error".mysqli_connect_error());
}

?>