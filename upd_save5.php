<?php
$T_no  = $_GET["T_no"];
$E_Employeee =$_POST["E_Employeee"];
$E_Name =$_POST["E_Name"];    
$E_Address =$_POST["E_Address"];    
$E_Tel =$_POST["E_Tel"];      

include('connection5.php');
$sql = "UPDATE tbl_employee  SET E_Employeee='$E_Employeee', E_Name='$E_Name', E_Address='$E_Address', E_Tel='$E_Tel' WHERE T_no=$T_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index5.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index5.php'</script>";
}
$conn->close();
?>