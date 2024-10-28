<?php
$servername = "websales01-server.mysql.database.azure.com";
$username = "pkoibaloty";
$password = "mysqlverysecure1!";
$dbname = "websales01-database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception   

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();   

}
?>
