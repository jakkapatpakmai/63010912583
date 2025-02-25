<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>จักรภัทร ผักไหม (เจมส์)</title>
</head>

<body>
<h1>จักรภัทร ผักไหม (เจมส์)</h1>
<form method="post" action="">
    รหัส <input type="text" min="2" max="1000" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
    $std = $_POST['a'];
    $y = substr($std, 0, 2); 
    echo "<img src='http://202.28.32.211/picture/student/{$y}/{$std}.jpg' width='500' alt='Student Picture'>";
}
?>

</body>
</html>
