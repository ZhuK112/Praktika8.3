<html>
<head>
<title>Завдання 3 - Результат</title>
</head>
<body>
<h1>Завдання 3 - Результат</h1>
<?php
$c = $_POST['c'];
$d = $_POST['d'];

$sum = $c + $d;
$product = $c * $d;
$diff = $c - $d;
$quotient = $c / $d;

echo "Сума: $sum <br>";
echo "Добуток: $product <br>";
echo "Різниця: $diff <br>";
echo "Частка: $quotient <br>";
?>
</body>
</html>
