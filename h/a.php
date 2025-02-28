<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ร้านน้ำผลไม้</title>
</head>

<body>
<h1>ร้านน้ำผลไม้</h1>
<?php
$host = "212.80.215.205"; 
$user = "root"; 
$pwd = "12345678Y"; 
$db = "shop4631";  // ชื่อฐานข้อมูล


// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($host, $user, $pwd) or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_select_db($conn, $db) or die("เลือกฐานข้อมูลไม่ได้");
mysqli_query($conn, "set name utf8"); // แก้ไขเป็น "utf8" ไม่ใช่ "utr8"


// คำสั่ง SQL เพื่อดึงข้อมูล
$sql = "SELECT * FROM `products` ORDER BY `p_id` ASC";
$rs = mysqli_query($conn, $sql);


// แสดงผลข้อมูล
while ($data = mysqli_fetch_array($rs)) {
    $img = $data['p_id'] . "." . $data['p_ext']; // สร้างชื่อไฟล์รูปภาพ
    echo "<img src='imgs/$img' width='240'><br>"; // แสดงรูปภาพ
    echo $data['p_id'] . "<br>"; // แสดงรหัสสินค้า
    echo $data['p_name'] . "<br>"; // แสดงชื่อสินค้า
    echo $data['p_price'] . "<br>"; // แสดงราคาสินค้า
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>
</body>
</html>
