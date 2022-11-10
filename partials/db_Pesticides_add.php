<?php
include 'db_connect.php';

if (isset($_POST['save'])){
    $P_name = $_POST['p_name'];
    $S_name = $_POST['s_name'];
    $P_price = $_POST['p_price'];
    $E_date = $_POST['entry_date'];
    $T_stock = $_POST['p_stock'];


    $sql = "INSERT INTO pesticide_add(Pesticide_name, Seller_name, Price, Entry_date, Total_stock) VALUES ('$P_name', '$S_name', '$P_price', '$E_date','$T_stock')";


    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "Data inserted";
    }
    else{
        echo "error in insertion";
    }
}
?>
