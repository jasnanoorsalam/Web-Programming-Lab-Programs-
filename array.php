<html>
<head>
<title>array sorting</title>
</head>
<body>
<h2>PHP array sorting example</h2>
<?php
$a=["ann","christeena","blessy","sona"];
echo"<b>original array:</b><br>";
print_r($a);
echo"<br><br><b>ascending order:</b><br>";
asort($a);
print_r($a);
echo"<br><br><b>descending order:</b><br>";
asort($a);
print_r($a);
?>
</body>
</html>
