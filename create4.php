<?php
$Sell =$_POST["S_Sell"];
$Quantity =$_POST["S_Quantity"];
include('connection4.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_sale (S_Sell,S_Quantity) VALUES ('$Sell','$Quantity')";

if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index4.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index4.php'</script>";
}

$conn->close();
?>