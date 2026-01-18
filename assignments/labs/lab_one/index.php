<?php 
require_once 'car.php'; 

require_once 'connect.php';
// Instantiate a new Car object
$myCar = new Car("Toyota", "Camry", 2020);

// Display the car information
echo "<h1>My Car</h1>";
echo "<p>" . $myCar->getInfo() . "</p>";
// Hardest part was getting the connection set up, and remmbering everything so i added comments to remind me for later assignments. easiest getting the car.php set up
?>
