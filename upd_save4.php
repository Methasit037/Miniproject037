<?php
$e_no  = $_GET["e_no"];
$S_Sell =$_POST["S_Sell"];
$S_Quantity =$_POST["S_Quantity"];      

include('connection4.php');
$sql = "UPDATE tbl_sale  SET S_Sell='$S_Sell', S_Quantity='$S_Quantity' WHERE e_no=$e_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index4.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index4.php'</script>";
}
$conn->close();
?>