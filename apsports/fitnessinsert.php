<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'sportslogin');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_SESSION['uniqid'];
$sql = "UPDATE `details` SET `speed`='$_POST[speed]',`agility_intime`='$_POST[agility]',`power1_Vertical_Jump_cm`='$_POST[power1]',`power2_Broad_Jump_cm`='$_POST[power2]',`flexibility_cm`='$_POST[flex]',`endurence_12m_run`='$_POST[endu1]',`endurence_1800m_run`='$_POST[endu2]' WHERE uniqid='$name'";
  
$run=mysqli_query($conn,$sql);   
$query = "SELECT * FROM details";
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row['uniqid'];
    if ($run==TRUE && $field1name==$name) {
    echo "<script type='text/javascript'>alert('Data updated sucessfully');
        location='fitness.php';
        </script>";
}
else {
    echo "<script>alert('Error! Data not matched Enter again') ;
            location='fitness.php';
            </script>";
    
}}}
 else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

?>