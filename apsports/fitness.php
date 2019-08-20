<!DOCTYPE html>
<?php include "menu.php";?>
<html>
    <title>Fitness Test</title>
    <body>
        <div class="bg-img">
            <form class="container" method="post" action="fitnessinsert.php">
                <h1>FITNESS DETAILS</h1><br>
                Name:<input type="text" name="name" placeholder="name"><br>
                Speed(m/h):<input type="int" name="speed" placeholder="30mtrs Run"><br>
                Agility(min):<input type="int" name="agility" placeholder="4*10 Shuffle Run"><br>
                Power(cm):<input type="int" name="power1"placeholder="Vertical jump">
                                <input type="int" name="power2" placeholder="Broad jump"><br>
                Flexibility(cm):<input type="int" name="flex" placeholder=" Flexibility"><br>
                Endurence(Time):<input type="int" name="endu1"placeholder=" run12m">
                                    <input type="int" name="endu2"placeholder=" rum1800m"><br>
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
  
  background-image: url("28.jpg");

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
