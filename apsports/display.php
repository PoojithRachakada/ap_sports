
<?php 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sportslogin");
?>
<?php include "menu.php";?>
<html>
    <title>Display Page</title>
    <body>
        <div class="sel">
        <form action="display1.php" method="post">
            <a id="a">Persons Names:</a>
            <select name="select" class="select" >
                <?php  
                $res=mysqli_query($link,"select * from details");
                while($row=mysqli_fetch_array($res))
                {?>
                <option style="color:'red'"><?php echo $row["names"] ?></option>
                <?php
                }
                ?>
                
            </select>
            <input type="submit" class="get" name="get" value="Get Details"><br>
        </form>
            </div>
    </body>
</html>
<style>
body{
    background-image: url("12.jpg");
    min-height: 800px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    }
.sel{
    text-align:center;
  right:0%;
  margin: 20px;
  max-width: 1000px;
  padding: 16px;
  float:left;
}



select{
    font-family: cursive;
    font-size: 20px;
    background-color:aliceblue;
    border-color:darkred;
}
 
#a{
    font-size: 50px;
}

</style>
