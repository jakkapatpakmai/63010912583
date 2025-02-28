<?php
include_once("../connectdb.php");
header("Content-Type: text/html; charset=utf-8");

// ตรวจสอบว่ามีค่า id ส่งมาหรือไม่
if (!empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // ดึงข้อมูลสินค้า
    $sql = "SELECT * FROM products WHERE p_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        echo "<script>alert('ไม่พบสินค้านี้'); window.location='product_list.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ไม่ได้ระบุสินค้า'); window.location='product_list.php';</script>";
    exit;
}

// ตรวจสอบว่ามีการกด submit ฟอร์มหรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $pprice = mysqli_real_escape_string($conn, $_POST['pprice']);
    $pdetail = mysqli_real_escape_string($conn, $_POST['pdetail']);
    $pimageUpdated = false;

    // ตรวจสอบการอัปโหลดไฟล์ใหม่
    if (isset($_FILES['pimage']) && is_uploaded_file($_FILES['pimage']['tmp_name'])) {
        $fileTmpPath = $_FILES['pimage']['tmp_name'];
        $fileName = $_FILES['pimage']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // ตรวจสอบชนิดไฟล์ที่อนุญาต
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = $id . '.' . $fileExtension; // ตั้งชื่อไฟล์ใหม่ตามรหัสสินค้า
            $uploadPath = "../images/" . $newFileName;

            // ลบไฟล์เก่าก่อน (ถ้ามี)
            if (!empty($data['p_ext'])) {
                $oldFilePath = "../images/" . $id . '.' . $data['p_ext'];
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // ย้ายไฟล์ใหม่ไปยังโฟลเดอร์
            if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                $pimageUpdated = true;
            } else {
                echo "<script>alert('ไม่สามารถอัปโหลดรูปภาพได้');</script>";
            }
        } else {
            echo "<script>alert('ชนิดไฟล์ไม่ถูกต้อง');</script>";
        }
    }

    // อัปเดตข้อมูลในฐานข้อมูล
    if ($pimageUpdated) {
        $sql = "UPDATE products 
                SET p_name='$pname', p_price='$pprice', p_detail='$pdetail', p_ext='$fileExtension' 
                WHERE p_id='$id'";
    } else {
        $sql = "UPDATE products 
                SET p_name='$pname', p_price='$pprice', p_detail='$pdetail' 
                WHERE p_id='$id'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('แก้ไขสำเร็จ!'); window.location='update.php?id=$id';";
        echo "</script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาดในการแก้ไขข้อมูล');</script>";
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แก้ไขข้อมูลสินค้า</title>
</head>
<body>
<h1>ฟอร์มแก้ไขข้อมูลสินค้า</h1>
<form method="post" action="" enctype="multipart/form-data">
    ชื่อสินค้า: <input type="text" name="pname" value="<?php echo htmlspecialchars($data['p_name']); ?>" required autofocus> <br>
    ราคา: <input type="text" name="pprice" value="<?php echo htmlspecialchars($data['p_price']); ?>" required> <br>
    รายละเอียดสินค้า: <textarea name="pdetail" rows="5" cols="40" required><?php echo htmlspecialchars($data['p_detail']); ?></textarea> <br>

    รูปภาพปัจจุบัน: <br>
    <?php if (!empty($data['p_ext'])) : ?>
        <img src="../images/<?php echo htmlspecialchars($data['p_id'] . '.' . $data['p_ext']); ?>" width="100" alt="Product Image"> <br>
    <?php else : ?>
        <p>ไม่มีรูปภาพ</p>
    <?php endif; ?>

    รูปภาพใหม่ (ถ้ามี): <input type="file" name="pimage" accept="image/*"> <br>
    <button type="submit">บันทึก</button>
</form>
</body>
</html>
