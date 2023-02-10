<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <a href="ins_form.php" class="btn btn-success">เพิ่มข้อมูลลูกค้า</a>
        <a href="ins_form2.php" class="btn btn-success">เพิ่มข้อมูลสินค้า</a>
        <a href="ins_form3.php" class="btn btn-success">เพิ่มข้อมูลประเภทสินค้า</a>
        <a href="ins_form4.php" class="btn btn-success">เพิ่มข้อมูลการขาย</a>
        <a href="ins_form5.php" class="btn btn-success">เพิ่มข้อมูลพนักงาน</a>
        <a href="Logout.php" class="btn btn-danger">logout</a>

<table id="mytable" class="table table-bordered table-striped">
<table id="mytable" class="table table-bordered table-striped">
<table id="mytable" class="table table-bordered table-striped">
<table id="mytable" class="table table-bordered table-striped">
<table id="mytable" class="table table-bordered table-striped">
<h1 class="mt-2">เพิ่มข้อมูลลูกค้า</h1>
        <thead>

<tr>
<th>no</th>
<th>Name</th>
<th>LastName</th>
<th>Address</th>
<th>SunjectName</th>
<th>Update</th>
<th>Delete</th>

</tr>
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td>'. $row['c_no'] . '</td>';
echo '<td>'. $row['S_Name'] . '</td>';
echo '<td>'. $row['S_LastName'] . '</td>';
echo '<td>'. $row['S_Address'] . '</td>';
echo '<td>'. $row['S_SunjectName'] . '</td>';
echo '<td><a role="button"  href="update.php?c_no='.$row['c_no'].'" class="btn btn-primary">Update</a> ';
echo '<td><a href="delete.php?c_no='.$row['c_no'].'" class="btn btn-danger">delete</a>';
echo '</tr>';
}
} else {
echo " ";
}
$conn->close();
?>
</tbody>
</table>
<a href="index.php" class="btn btn-danger">Add</a>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>

