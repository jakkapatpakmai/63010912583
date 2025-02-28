<?php
$host = "localhost"; 
$user = "root"; 
$pwd = "12345678Y"; 
$db = "shop4631"; 

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($host, $user, $pwd, $db);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้: " . mysqli_connect_error());
}

// ตั้งค่าภาษาให้รองรับ UTF-8
mysqli_set_charset($conn, "utf8");

?>
