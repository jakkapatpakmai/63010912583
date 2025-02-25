<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>จักรภัทร ผักไหม (เจมส์)</title>
</head>

<body>
<h1>จักรภัทร ผักไหม (เจมส์)</h1>
<form method="post" action="">
    แม่สูตรคูณ: <input type="number" min="2" max="1000" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
    $m = $_POST['a']; // รับค่าจาก input
    $i = 1; // เริ่มต้นตัวนับ
    echo "<h2>แม่สูตรคูณของ $m</h2>";
    
    while ($i <= 12) {
        $x = $m * $i; // คำนวณผลคูณ
        echo "$m x $i = $x <br>"; // แสดงผลลัพธ์
        $i++; // เพิ่มค่าตัวนับ
    }
}
?>

</body>
</html>
