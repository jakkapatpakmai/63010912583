<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>จักรภัทร ผักไหม (เจมส์)</title>
</head>

<body>
<h1>จักรภัทร ผักไหม (เจมส์)</h1>

<form method="post" action="">
ราคาสินค้ารวม <input type="number" name="a" min="0" autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
    $price = $_POST['a']; 
    $discount = 0; 
    if ($price >= 5000) {
        $discount = $price * 0.15; 
    } elseif ($price >= 2000) {
        $discount = $price * 0.10; 
    } elseif ($price >= 1000) {
        $discount = $price * 0.05; 
    } else {
		$discount = 0 ;
		}

    $net = $price - $discount; 

    echo "ราคาสินค้ารวม = " . number_format($price, 0) . " บาท <br>";
    echo "ส่วนลดที่ได้รับ = " . number_format($discount, 0) . " บาท <br>";
    echo "จำนวนเงินที่จ่ายจริง = " . number_format($net, 0) . " บาท <br>";
}
?>


</body>
</html>