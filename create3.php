<?php
$Name =$_POST["T_Name"];
include('connection3.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_product_type (T_Name) VALUES ('$Name')";

if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index3.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index3.php'</script>";
}

$conn->close();
?>