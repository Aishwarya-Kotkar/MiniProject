<?php
include 'db_connect.php';
if (isset($_POST['save'])){
    $Bill_no = $_POST['bill_no'];
    $Date = $_POST['date1'];
    $C_name = $_POST['C_name'];
    $phone_no = $_POST['phone'];
    $P_count = $_POST['p_count'];
    $P_names = $_POST['p_name'];
    $Quantity = $_POST['quantity1'];
    $T_Price = $_POST['Prices'];
    $P_method = $_POST['method'];

    $sql = "INSERT INTO billing_add(Bill_no, Bill_Date, C_name, phone,P_count, P_name, Quantity,T_price, P_method) VALUES('$Bill_no', '$Date', '$C_name', '$phone_no', '$P_count','$P_names','$Quantity','$T_Price','$P_method')";

    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "Data inserted";
    }
    else{
        echo "error in insertion";
    }
}
?>
