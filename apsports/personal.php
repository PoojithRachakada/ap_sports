<?php include "menu.php";?>
<html>
    <title>
        Personal Details
    </title>
    <body><div class="bg-img">
           <form class="container" action="personalinsert.php" method="post">
                <h1>Personal Details</h1>
                Name:<input type="text"name="name"><br>
                Age:<input type="int" name="age" ><br>
                DOB:<input type="date"name="dob"><br>
                Height:<input type="int" name="height"><br>
                weight:<input type="int" name="weight"><br>
                <input class="btn"type="submit"value="submit"><br>
            </form>
            </div>
    </body>
</html>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  
  background-image: url("12.jpg");

  min-height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.container {
    background-image: url("1.webp");
    background-repeat:repeat-y;
    background-position: right;
    background-size:cover;
  position:absolute;
  right:0;
  margin: 20px;
  max-width: 350px;
  padding: 16px;
  background-color: white;
}


input[type=text], input[type=int] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=int]:focus {
  background-color: #ddd;
  outline: none;
}


.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}