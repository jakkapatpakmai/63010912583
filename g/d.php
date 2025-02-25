<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>จักรภัทร ผักไหม (เจมส์)</title>
</head>

<body>
<h1>จักรภัทร ผักไหม (เจมส์)</h1>
<form method="post" action="">
	จำนวน <input type="number" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
    
</form>

<?php
	if (isset($_POST['Submit'])) {
		$c = $_POST['a'];
		echo "แสดงจำนวน $c รูป<br>";
		for($i=1; $i<=$c; $i++){

?>
 <img src="1/04.jpg" width="300">
<?php 
		} // end for
} // end if ?>

</body>
</html>