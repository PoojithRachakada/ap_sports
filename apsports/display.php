<?php 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sportslogin");
?>
<?php include "menu.php";?>
<html>
    <title>Display Page</title>
    <body><h1>To Know The Details Select Name And Click  Get Details</h1>
        <div class="sel">
        <form action="#" method="post">
            <select name="select" class="select">
                <?php  
                $res=mysqli_query($link,"select * from details");
                while($row=mysqli_fetch_array($res))
                {?>
                <option style="color:'red'"><?php echo $row["names"] ?></option>
                <?php
                }
                ?>
                
            </select>
            <input type="submit" class="get" name="get" value="Get Details" /><br>
        </form>
            </div>
       <div class="details">
       <?php 
       if(isset($_POST["get"])){
        $names=$_POST["select"];
        $email=$_POST["select"];
       $sql="SELECT `id`, `names`, `email`, `age`, `dob`, `ht`, `wt`, `speed`, `agility_intime`, `power1_Vertical_Jump_cm`, `power2_Broad_Jump_cm`, `flexibility_cm`, `endurence_12m_run`, `endurence_1800m_run` FROM `details` WHERE names='$names' OR email='$email'";
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result) > 0){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                echo "<table>";
                    echo "<tr>";
                        echo "<tr><td>id</td><td>:" . $row['id'] . "</td><tr>";
                        echo "<tr><td>Name</td><td>:" . $row['names'] . "</td><tr>";
                        echo "<tr><td>email</td><td>:" . $row['email'] . "</td><tr>";
                        echo "<tr><td>age</td><td>:" . $row['age'] . "</td><tr>";
                        echo "<tr><td>dob</td><td>:" . $row['dob'] . "</td><tr>";
                        echo "<tr><td>ht</td><td>:" . $row['ht'] . "</td><tr>";
                        echo "<tr><td>wt</td><td>:" . $row['wt'] . "</td><tr>";
                        echo "<tr><td>speed</td><td>:" . $row['speed'] . "</td><tr>";
                        echo "<tr><td>Agility(time)</td>:<td>:" . $row['agility_intime'] . "</td><tr>";
                        echo "<tr><td>Power<td><td><tr><td>Vertical Jump</td><td>Horizontal Jump</td></tr><tr><td>".$row['power1_Vertical_Jump_cm']."</td><td>".$row['power2_Broad_Jump_cm']."</td></tr></td></tr>";
                        echo "<tr><td>Flexibility</td><td>:" . $row['flexibility_cm'] . "</td><tr>";
                        echo "<tr><td>Endurence<td>:<td><tr><td>12 mtrs run</td><td>1800 mtrs run</td></tr><tr><td>".$row['endurence_12m_run']."</td><td>".$row['endurence_1800m_run']."</td></tr></td></tr>";
                         echo"</tr>";
                }
                echo "</table>";
                
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        }
    
    ?></div>
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
  left:0;
  margin: 20px;
  max-width: 1000px;
  padding: 16px;
}

h1{
    background-color: green;
}
select{
    font-family: cursive;
    font-size: 32px;
    background-color:green;
    border-color:darkred;
}
option{
    color:whitesmoke;
}

.details{
    position:absolute;
    left:0;
    background-color:aliceblue;
    
}

</style>