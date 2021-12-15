<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
print_r($cars);

for($x = 0; $x < $arrlength; $x++) {
  print_r($cars[$x]);
  echo "\n";
}
?>