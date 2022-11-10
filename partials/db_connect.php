<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "miniproject";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn){
 echo "Connection established";
}
else{
    die("Error in connection".mysqli_connect_error());
}
?>