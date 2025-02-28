<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เพิ่มข้อมูลสินค้า</title>
</head>

<body>

<h1>ฟอร์มเพิ่มข้อมูลสินค้า</h1>

<form method="post" action="" enctype="multipart/form-data">
    ชื่อสินค้า: <input type="text" name="pname" required autofocus> 
    <br>
    ราคาสินค้า: <input type="number" name="pprice" required step="0.01">
    <br>
    รายละเอียดสินค้า: <textarea name="pdetail" rows="4" cols="50" required></textarea>
    <br>
    รูปภาพสินค้า: <input type="file" name="pimage" accept="image/*" required>
    <br>
    <input type="submit" value="บันทึกข้อมูล">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once("../connectdb.php"); 

    // รับค่าจากฟอร์ม
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $pprice = mysqli_real_escape_string($conn, $_POST['pprice']);
    $pdetail = mysqli_real_escape_string($conn, $_POST['pdetail']);

    // จัดการอัปโหลดรูปภาพ
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["pimage"]["name"]);
    move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file);

    // บันทึกข้อมูลลงฐานข้อมูล
    $sql = "INSERT INTO products (p_name, p_price, p_detail, p_image) 
            VALUES ('$pname', '$pprice', '$pdetail', '$target_file')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');</script>";
    }
}
?>
</body>
</html>
