<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportslogin";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    uniqid CHAR(30) NOT NULL,
    names VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    passwords VARCHAR(30) NOT NULL,
    mobile VARCHAR(30) NOT NULL
    )";
$sql1 = "CREATE TABLE details (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uniqid CHAR(30) NOT NULL, 
    names VARCHAR(30) NOT NULL
)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table users created successfully<br>";
    } else {
        echo "Error creating user table table: " . $conn->error;
    }
    if ($conn->query($sql1) === TRUE) {
        echo "Table details created successfully";
    } else {
        echo "Error creating details table: " . $conn->error;
    }
    
    $conn->close();
    ?>