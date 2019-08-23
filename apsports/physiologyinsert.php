<?php
$conn = new mysqli('localhost', 'root', '', 'sportslogin');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$sql = "UPDATE `details` SET `heartrate`='$_POST[heartrate]',`pulserate`='$_POST[pulserate]',`distolic`='$_POST[distolic]',`psistolic`='$_POST[psistolic]',`resp+Ve`='$_POST[respPve]',`resp-Ve`='$_POST[respNve]',`oxygencapacity`='$_POST[oxygencapacity]',`haemoglobin`='$_POST[haemoglobin]',`bodyconsumptions`='$_POST[consumptions]' WHERE names='$_POST[name]'";
  
$run=mysqli_query($conn,$sql);   
$query = "SELECT * FROM details";
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["names"];
    if ($run==TRUE && $field1name==$name) {
    echo "<script type='text/javascript'>alert('Data updated sucessfully');
        location='physiology.php';
        </script>";
}
else {
    echo "<script>alert('Error! Data not matched Enter again') ;
            location='physiology.php';
            </script>";
    
}}}
 else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

?>