<?php 

include_once "./dongvat.php";
include_once "./cat.php";



$Cat = new Cat();
echo "kêu ";
$Cat->voice();
echo "<br>";
$Cat->move();
echo "<br>";

?>