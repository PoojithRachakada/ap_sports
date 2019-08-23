<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportslogin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['mail'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$mobile = $_POST['mobile'];
if($password==$rpassword){
$sql = "INSERT INTO users(names,email,passwords,mobile)
VALUES ('$name','$email','$password','$mobile')";
$sql1 = "INSERT INTO details(names,email)
VALUES ('$name','$email')";

if (mysqli_query($conn, $sql)) {
    header("location:home.php");
}
if (mysqli_query($conn, $sql1)) {
   
}
}

else {
    echo "<script type='text/javascript'>alert('password not match');
    location='register.php';
    </script>";
}
}

mysqli_close($conn); 
?>