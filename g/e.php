<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>จักรภัทร ผักไหม (เจมส์)</title>
</head>

<body>
<h1>จักรภัทร ผักไหม (เจมส์)</h1>
<form method="post" action="">
	แม่สูตรคูณ <input type="number" min="2" max="1000" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
    
</form> <hr>

<?php
	if (isset($_POST['Submit'])) {
		
		$m = $_POST['a'];
		for($i=1; $i<=12; $i++){
			$x = $m * $i ;
?>
 	<?=$m;?> x <?=$i;?> = <?=$x;?> <br>
    
<?php 
		} // end for
} // end if ?>

</body>
</html>