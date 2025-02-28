<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>จักรภัทร ผักไหม (เจมส์)</title>
</head>

<body>
<h1>จักรภัทร ผักไหม (เจมส์)</h1>

<form method="post" action="">
คะแนน <input type="number" name="a" min="0" max="100" autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
$score = $_POST['a'];
if ($score >= 80) {
$grade = "A" ;
} else if ($score >= 70) {
$grade = "B" ;
} else if ($score >= 60) {
$grade = "C" ;
} else if ($score >= 50) {
$grade = "D" ;
} else {
$grade = "F" ;
}
echo "คะแนน $score ได้เกรด $grade" ;
}
?>









</body>
</html>