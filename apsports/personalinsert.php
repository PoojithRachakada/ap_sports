<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportslogin";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_SESSION['uniqid'];
$age = $_POST['age'];
$dob=$_POST['dob'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$sql = "UPDATE `details` SET `age`='$age',`dob`='$dob',`ht`='$height',`wt`='$weight' WHERE uniqid='$name'";
$run=mysqli_query($conn,$sql);
$query = "SELECT * FROM details";
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row['uniqid'];
    if ($run==TRUE && $field1name==$name) {
    echo "<script type='text/javascript'>alert('Data updated sucessfully');
        location='personal.php';
        </script>";
}
else {
    "<script type='text/javascript'>alert('Data not updated sucessfully');
        location='personal.php';
        </script>";
    
}}}
if(!$run){
    echo "Error: " . mysqli_error($conn);
    }

mysqli_close($conn);
?>