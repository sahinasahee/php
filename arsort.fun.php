<?php

echo "Sorting array<br/>";
echo "=================<br/>";
$stud=array("Nidhi","sreelakshmi","agna","riya","christy");
echo"displaying array using print_r():";
print_r($stud);

echo"<br>Array in ascending order:</br>";
asort($stud);
print_r($stud);

echo"<br>Array in descending order:</br>";
arsort($stud);
print_r($stud);
?>