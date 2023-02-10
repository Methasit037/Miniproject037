<?php 
 $T_no = $_GET['T_no'];
include('connection5.php');
$sql = "DELETE FROM tbl_employee WHERE T_no=$T_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record deleted successfully');</script>";
    echo "<script>window.location.href='index5.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index5.php'</script>";
}

$conn->close();
?>