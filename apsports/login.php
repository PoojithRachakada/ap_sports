<?php
session_start();
$_SESSION["uniqid"]=$_POST["uniqid"];
$username = "root"; 
$password = ""; 
$database = "sportslogin"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM users";

if(isset($_POST["submit"])){
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["passwords"];
        $name=$row["uniqid"];  
          
 if($_POST["password"]==$field1name)
 {  
    header("Location:home1.php");
   
 }
    }
    $result->free();
} 
}
echo"ENETRED EMAIL OR PASSWORD IS INCORRECT";


?>