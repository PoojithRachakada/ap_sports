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
$uniqid=uniqid(APSP);
if($password==$rpassword){
$sql = "INSERT INTO users(uniqid,names,email,passwords,mobile)
VALUES ('$uniqid','$name','$email','$password','$mobile')";
$sql1 = "INSERT INTO details(uniqid,names)
VALUES ('$uniqid','$name')";

if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('This is your ID :$uniqid');
    location='home.php';
    </script>";
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