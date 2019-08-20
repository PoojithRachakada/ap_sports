<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportslogin";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "ALTER TABLE  details 
    ADD COLUMN `age` int(30) NOT NULL,
    ADD COLUMN `dob` DATE NOT NULL,
    ADD COLUMN `ht` int(30) NOT NULL,
    ADD COLUMN `wt` int(30) NOT NULL,
    ADD COLUMN `speed` int(30) NOT NULL,
    ADD COLUMN `agility_intime` TIME NOT NULL,
    ADD COLUMN `power1_Vertical_Jump_cm` int(30) NOT NULL,
    ADD COLUMN `power2_Broad_Jump_cm` int(30) NOT NULL,
    ADD COLUMN `flexibility_cm` int(30) NOT NULL,
    ADD COLUMN `endurence_12m_run` TIME NOT NULL,
    ADD COLUMN `endurence_1800m_run` TIME NOT NULL";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
    ?>