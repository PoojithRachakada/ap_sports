<!DOCTYPE html>
<?php include "menu.php";?>
<html>
    <title>physiology Test</title>
    <body>
        <div class="bg-img">
            <form class="container" method="post" action="physiologyinsert.php">
                <h1>PHYSIOLOGICAL DETAILS</h1><br>
                Name:<input type="text" name="name" placeholder="name"><br>
                Heart Rate:<input type="int" name="heartrate" placeholder="Heartrate"><br>
                pulse Rate:<input type="int" name="pulserate" placeholder="pulserate"><br>
                Distolic:<input type="int" name="distolic" placeholder="distolic"><br>
                psistolic:<input type="int" name="psistolic" placeholder="Heartrate"><br>
                Respiration:<input type="int" name="respPve" placeholder="+ve"><br>
                <input type="int" name="respNve" placeholder="-ve"><br>
                oxygen capacity:<input type="int" name="oxygencapacity" placeholder="Oxygen Capacity"><br>
                Haemoglobin:<input type="int" name="haemoglobin" placeholder="haemoglobin"><br>
                Body Consumptions:<input type="int" name="consumptions" placeholder="Body Consumptions"><br>
                <input class="btn" type="submit" value="submit">
                
        </div>
            </form>
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
    background-image: url("31.jpg");
    background-repeat:repeat-y;
    background-position: center;
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
  padding: 10px;
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
</style>
