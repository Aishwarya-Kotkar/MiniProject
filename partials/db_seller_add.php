<?php
include 'db_connect.php';

if (isset($_POST['save'])){
    $S_name = $_POST['s_name'];
    $Address = $_POST['address'];
    $P_name = $_POST['lastname'];
    $Phone = $_POST['phone'];

    $sql = "INSERT INTO seller_add(Seller_name, S_Address, Product_name, Phone) VALUES ('$S_name', '$Address','$P_name','$Phone')";

    $myResult = mysqli_query($conn, $sql);

    if ($myResult){
        echo "Data inserted successfully";
    }
    else{
        echo "There is problem in data insertion";
    }
}

?>
