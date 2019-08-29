<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'sportslogin');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_SESSION['uniqid'];
$sql = "UPDATE `details` SET `armlength`='$_POST[armlength]',`leglength`='$_POST[leglength]',`trunklength`='$_POST[trunklength]',`handgrith`='$_POST[handgrith]',`calfgrith`='$_POST[calfgrith]',`shoulderwidth`='$_POST[shoulderwidth]',`hipwidth`='$_POST[hipwidth]' WHERE names=uniqid='$name'";
  
$run=mysqli_query($conn,$sql);   
$query = "SELECT * FROM details";
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row['uniqid'];
    if ($run==TRUE && $field1name==$name) {
    echo "<script type='text/javascript'>alert('Data updated sucessfully');
        location='anthropermatic.php';
        </script>";
}
else {
    echo "<script>alert('Error! Data not matched Enter again') ;
            location='anthropermatic.php';
            </script>";
    
}}}
 else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

?>