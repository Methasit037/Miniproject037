<?php 
 $A_no = $_GET['A_no'];
include('connection3.php');
$sql = "DELETE FROM tbl_product_type WHERE A_no=$A_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record deleted successfully');</script>";
    echo "<script>window.location.href='index3.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index3.php'</script>";
}

$conn->close();
?>