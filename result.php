<?php
$c = $_POST['c'];
$d = $_POST['d'];

// Перевірка, чи введені числа є цілими
if (!is_numeric($c) || !is_numeric($d) || !is_int($c + 0) || !is_int($d + 0)) {
    echo "Введені значення повинні бути цілими числами.";
    exit;
}

$sum = $c + $d;
$product = $c * $d;
$difference = $c - $d;
$quotient = $c / $d;

echo "Сума: " . $sum . "<br>";
echo "Добуток: " . $product . "<br>";
echo "Різниця: " . $difference . "<br>";
echo "Частка: " . $quotient . "<br>";
?>
