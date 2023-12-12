<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS allphptricks";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Connect to the specific database
$conn->select_db("allphptricks");

// Create table
$tableSql = "CREATE TABLE IF NOT EXISTS `products` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(250) NOT NULL,
    `code` varchar(100) NOT NULL,
    `price` double(9,2) NOT NULL,
    `image` varchar(250) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($tableSql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();

?>