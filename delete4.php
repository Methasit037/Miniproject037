<?php 
 $e_no = $_GET['e_no'];
include('connection4.php');
$sql = "DELETE FROM tbl_sale WHERE e_no=$e_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record deleted successfully');</script>";
    echo "<script>window.location.href='index4.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index4.php'</script>";
}

$conn->close();
?>