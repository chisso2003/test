<?php
// Display a basic "Hello" message
echo "<h1>Hello from Azure App Service!</h1>";

// Database connection settings
$host = "websales01-server.mysql.database.azure.com"; // Replace with your MySQL Flexible Server hostname
$username = "pkoibaloty@your-mysql-server"; // Replace with your MySQL username
$password = "mysqlverysecure1!"; // Replace with your MySQL password
$dbname = "websales01-database"; // Replace with your MySQL database name

// Test database connectivity
echo "<h2>Testing database connectivity...</h2>";

try {
    // Create a new PDO instance for MySQL connection
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);

    // If connection is successful
    echo "<p>Successfully connected to the MySQL database!</p>";

    // Optional: Query a sample table to verify data retrieval
    // Uncomment if you have a test table in your database
    // $stmt = $pdo->query("SELECT * FROM sample_table LIMIT 1");
    // while ($row = $stmt->fetch()) {
    //     echo "<pre>" . print_r($row, true) . "</pre>";
    // }
} catch (PDOException $e) {
    // If there is an error with the connection
    echo "<p>Failed to connect to the MySQL database: " . $e->getMessage() . "</p>";
}
?>
