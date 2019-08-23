<!DOCTYPE html>
<?php include "menu.php";?>
<html>
    <title>anthropermatic Test</title>
    <body>
        <div class="bg-img">
            <form class="container" method="post" action="anthropermaticinsert.php">
                <h1>ANTHRPERMATIC DETAILS</h1><br>
                Name:<input type="text" name="name" placeholder="name"><br>
                Arm Length:<input type="int" name="armlength" placeholder="Arm Length"><br>
                Leg length:<input type="int" name="leglength" placeholder="Leg length"><br>
                Trunk Length:<input type="int" name="trunklength" placeholder="Trunk Length"><br>
                Hand Grith:<input type="int" name="handgrith" placeholder="Hand Grith"><br>
                Calf Grith:<input type="int" name="calfgrith" placeholder="Calf Grith"><br>
                Shoulder width:<input type="int" name="shoulderwidth" placeholder="Shoulder Width"><br>
                Hip Width:<input type="int" name="hipwidth" placeholder="Hip Width"><br>
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
