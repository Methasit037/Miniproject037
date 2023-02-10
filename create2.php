<?php
$Name =$_POST["P_Name"];
$Product= $_POST["P_Product"];
$Price= $_POST["P_Price"];
include('connection2.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_product (P_Name,P_Product,P_Price) VALUES ('$Name','$Product','$Price')";

if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index2.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index2.php'</script>";
}

$conn->close();
?>