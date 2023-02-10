<?php
$A_no = $_GET["A_no"];
$P_Name =$_POST["P_Name"];   

include('connection3.php');
$sql = "UPDATE tbl_product_type  SET P_Name='$P_Name' WHERE A_no=$A_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index3.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index3.php'</script>";
}
$conn->close();
?>