<?php session_start();
include('connection2.php');
$ID = $_SESSION['a_id'];
$name = $_SESSION['a_username'];
$level = $_SESSION['a_level'];
if($level!='A'){
Header("Location:logout.php");
}
?>
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

        <thead>

<tr>


</tr>
</thead>
<tbody>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <hr>
        <h1 class="mt-5">เพิ่มข้อมูลลูกค้า</h1>
        <hr>
        
<div class="mb-3">
<form  action="create2.php" method="post">
            <div class="mb-3">
                <label for="P_Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="P_Name" required>
            </div>
            <div class="mb-3">
                <label for="P_Product" class="form-label">Product</label>
                <input type="text" class="form-control" name="P_Product" required>
            </div>
            <div class="mb-3">
                <label for="P_Price" class="form-label">Price</label>
                <input type="text" class="form-control" name="P_Price" required>
            </div>
            <button type="submit">Create</button>
            <a class="btn" href="ins_form2.php">Back</a>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>