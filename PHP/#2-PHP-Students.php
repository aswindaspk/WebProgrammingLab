<?php
$name=["Aswin","Maanas","Vishnu","Minhaj","Vaishnav"];
$t=$name;
echo "Display using print_r<br>";
print_r($name);
echo "<br><br>";
echo "Sorting using arsort()<br>";
arsort($t);
print_r($t);
echo "<br><br>";
echo "Sorting using asort()<br>";
asort($name);
print_r($name);
