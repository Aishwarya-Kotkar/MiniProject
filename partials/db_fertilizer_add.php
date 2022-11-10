<?php
include 'db_connect.php';

if (isset($_POST['save'])){
    $F_name = $_POST['f_name'];
    $S_name = $_POST['s1_name'];
    $P_product = $_POST['price1'];
    $E_date = $_POST['date1'];
    $T_stock = $_POST['T_stock1'];

    $sql = "INSERT INTO fertilizer_add (Fertilizer_name, Seller_name, Product_price, Entry_date, Total_stock) VALUES ('$F_name', '$S_name', '$P_product', '$E_date','$T_stock')";

    $result = mysqli_query($conn, $sql);
    
    if ($result){
        echo "Data inserted";
    }
    else{
        echo "error in insertion";
    }
}
?>
