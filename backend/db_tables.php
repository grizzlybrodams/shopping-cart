<?php

$servername = "localhost"; 

 
$username = "root"; 


$password = ""; 

$dbname = "shoppingcart";

$conn = new mysqli($servername, 
			$username, $password,$dbname); 


if ($conn->connect_error) { 
	die("Connection failure: "
		. $conn->connect_error); 
} 



$sql = "CREATE TABLE AnimalPlushie (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Itemname VARCHAR(30) NOT NULL,
    itemnumber VARCHAR(30) NOT NULL,
    stock VARCHAR(50),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table Animalplusie created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }


    $conn->close(); 
?> 
