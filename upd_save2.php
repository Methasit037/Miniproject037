<?php
$n_no = $_GET["n_no"];
$P_Name =$_POST["P_Name"];  
$P_Product =$_POST["P_Product"];
$P_Price =$_POST["P_Price"];  

include('connection2.php');
$sql = "UPDATE tbl_product  SET P_Name='$P_Name', P_Product='$P_Product', P_Price='$P_Price' WHERE n_no=$n_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index2.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index2.php'</script>";
}
$conn->close();
?>