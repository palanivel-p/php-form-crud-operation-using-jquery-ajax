<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "form";

$conn = mysqli_connect($server_name, $user_name, $password, $database_name);

if(!$conn){
    echo "connection failed";
}
else{
    echo "connection success";
}
?>
