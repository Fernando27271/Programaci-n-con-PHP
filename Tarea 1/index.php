<?php
$cars = array(
    array("Volvo",22,18), // Marca, stock, sold
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

foreach($cars as $key) {
  echo " $key[0]" . ": " . "In Stock: " . $key[1] . " Sold: ". $key[2] ; 
  echo "<br>";
}

?>