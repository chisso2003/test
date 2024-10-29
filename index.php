<?php
// Database configuration
$servername = "websales01-server.mysql.database.azure.com";
$username = "pkoibaloty";
$password = "mysqlverysecure1!";
$dbname = "websales01-database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the MySQL database.";

// Optionally, you can execute a simple query to confirm access to the database
$sql = "SELECT DATABASE()";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_row();
    echo "<br>Connected to database: " . $row[0];
} else {
    echo "<br>Failed to retrieve database name.";
}

// Close the connection
$conn->close();
?>
