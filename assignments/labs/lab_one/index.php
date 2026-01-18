<?php 
require_once 'car.php'; 

require_once 'connect.php';
// Instantiate a new Car object
$myCar = new Car("Toyota", "Camry", 2020);

// Display the car information
echo "<h1>My Car</h1>";
echo "<p>" . $myCar->getInfo() . "</p>";
?>
