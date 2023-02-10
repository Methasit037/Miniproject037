<?php 
 $n_no = $_GET['n_no'];
include('connection2.php');
$sql = "DELETE FROM tbl_product WHERE n_no=$n_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record deleted successfully');</script>";
    echo "<script>window.location.href='index2.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index2.php'</script>";
}

$conn->close();
?>