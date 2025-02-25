<?php

header("Content-Type: text/html; charset=utf-8");

if (!empty($_GET['id']) && !empty($_GET['ext'])) {
    include_once("../connectdb.php");

   
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    

    $sql = "DELETE FROM products WHERE p_id = '$id'";
    if (mysqli_query($conn, $sql)) {
    
        $imagePath = "../images/{$id}.{$_GET['ext']}";
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        echo "<script>alert('ลบข้อมูลสำเร็จ'); window.location='product_list.php';</script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาดในการลบข้อมูล');</script>";
    }
} else {
    echo "<script>alert('ข้อมูลไม่ครบถ้วน');</script>";
}
?>
