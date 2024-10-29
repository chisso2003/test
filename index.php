<?php
// Display a basic "Hello" message
echo "<h1>Hello from Azure App Service!</h1>";

// Database connection settings
$host = "websales01-server.mysql.database.azure.com";
$username = "pkoibaloty";
$password = "mysqlverysecure1!";
$dbname = "websales01-database";
$port = 3306;
//$ca_cert_path = "{path to CA cert}"; // e.g., "/path/to/BaltimoreCyberTrustRoot.crt.pem"

// Initialize the MySQLi connection
$con = mysqli_init();

// Set SSL parameters
if (!mysqli_ssl_set($con, NULL, NULL, $ca_cert_path, NULL, NULL)) {
    die("<p>Failed to set SSL parameters: " . mysqli_error($con) . "</p>");
}

// Attempt to connect to the database
if (!mysqli_real_connect($con, $host, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("<p>Failed to connect to MySQL database: " . mysqli_connect_error() . "</p>");
}

echo "<p>Successfully connected to the MySQL database!</p>";

// Optional: Test a simple query to verify data retrieval
$result = mysqli_query($con, "SELECT NOW() as current_time");
if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<p>Current database time: " . $row['current_time'] . "</p>";
    mysqli_free_result($result);
}

// Close the connection
mysqli_close($con);
?>
