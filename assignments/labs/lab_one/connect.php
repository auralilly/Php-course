<?php
$host     = 'localhost';
$dbname   = 'lab_one_db';          // ← your database name
$username = 'root';                // default XAMPP/WAMP username
$password = '';                    // default XAMPP/WAMP has no password

// DSN (Data Source Name) string for PDO
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
try {
    // Create PDO connection
    $pdo = new PDO($dsn, $username, $password);
    
    // Set PDO to throw exceptions on errors (best practice)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "<h2 style='color:red;'>Connection failed!</h2>";
    echo "<p>Error: " . $e->getMessage() . "</p>";
    // Stop script execution
    exit();
}
?>

