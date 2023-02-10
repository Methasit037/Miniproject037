<?php
$Employeee =$_POST["E_Employeee"];
$Name =$_POST["E_Name"];
$Address =$_POST["E_Address"];
$Tel =$_POST["E_Tel"];
include('connection5.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_employee (E_Employeee,E_Name,E_Address,E_Tel) VALUES ('$Employeee','$Name','$Address','$Tel')";

if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index5.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index5.php'</script>";
}

$conn->close();
?>