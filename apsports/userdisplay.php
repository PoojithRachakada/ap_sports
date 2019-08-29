<html>
    <body>
        <a href="home1.php"><button>Back<<</button></a> 
    </body>

<?php 
session_start();

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sportslogin");

     
        $names=$_SESSION['uniqid'];
      
       $sql="SELECT `id`, `uniqid`, `names`, `age`, `dob`, `ht`, `wt`, `speed`, `agility_intime`, `power1_Vertical_Jump_cm`, `power2_Broad_Jump_cm`, `flexibility_cm`, `endurence_12m_run`, `endurence_1800m_run`, `heartrate`, `pulserate`, `distolic`, `psistolic`, `resp+Ve`, `resp-Ve`, `oxygencapacity`, `haemoglobin`, `bodyconsumptions`, `armlength`, `leglength`, `trunklength`, `handgrith`, `calfgrith`, `shoulderwidth`, `hipwidth` FROM `details` WHERE uniqid='$names'";
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result) > 0){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        echo "<table class='GFGInput'border='3' style='border-color:black'>";
                        echo "<tr>";
                        echo "<tr><td>id</td><td>" . $names . "</td><tr>";
                        echo "<tr><td>Name</td><td>" . $row['names'] . "</td><tr>";
                        echo "<tr><td>age</td><td>" . $row['age'] . "</td><tr>";
                        echo "<tr><td>dob</td><td>" . $row['dob'] . "</td><tr>";
                        echo "<tr><td>ht</td><td>" . $row['ht'] . "</td><tr>";
                        echo "<tr><td>wt</td><td>" . $row['wt'] . "</td><tr>";
                        echo "<tr><td>speed</td><td>" . $row['speed'] . "</td><tr>";
                        echo "<tr><td>Agility(time)</td><td>" . $row['agility_intime'] . "</td><tr>";
                        echo "<tr><td>Power<td><td><tr><td>Vertical Jump</td><td>Horizontal Jump</td></tr><tr><td>".$row['power1_Vertical_Jump_cm']."</td><td>".$row['power2_Broad_Jump_cm']."</td></tr></td></tr>";
                        echo "<tr><td>Flexibility</td><td>" . $row['flexibility_cm'] . "</td><tr>";
                        echo "<tr><td>Endurence<td><td><tr><td>12 mtrs run</td><td>1800 mtrs run</td></tr><tr><td>".$row['endurence_12m_run']."</td><td>".$row['endurence_1800m_run']."</td></tr></td></tr>";
                        echo "<tr><td>arm length</td><td>" . $row['armlength'] . "</td><tr>";
                        echo "<tr><td>Leg length</td><td>" . $row['leglength'] . "</td><tr>";
                        echo "<tr><td>Trunk Length</td><td>" . $row['trunklength'] . "</td><tr>";
                        echo "<tr><td>Hand Grith </td><td>" . $row['handgrith'] . "</td><tr>";
                        echo "<tr><td>Calf Grith</td><td>" . $row['calfgrith'] . "</td><tr>";
                        echo "<tr><td>Shoulder Width</td><td>" . $row['shoulderwidth'] . "</td><tr>";
                        echo "<tr><td>Hip Width</td><td>" . $row['hipwidth'] . "</td><tr>";
                        echo "<tr><td>heart rate</td><td>" . $row['heartrate'] . "</td><tr>";
                        echo "<tr><td>Pulse Rate</td><td>" . $row['pulserate'] . "</td><tr>";
                        echo "<tr><td>Distolic</td><td>" . $row['distolic'] . "</td><tr>";
                        echo "<tr><td>Psistolic</td><td>" . $row['psistolic'] . "</td><tr>";
                        echo "<tr><td>respiration (+ve)</td><td>" . $row['resp+Ve'] . "</td><tr>";
                        echo "<tr><td>Respiration (-Ve)</td><td>" . $row['resp-Ve'] . "</td><tr>";
                        echo "<tr><td>Oxygen Capacity</td><td>" . $row['oxygencapacity'] . "</td><tr>";
                        echo "<tr><td>Haemoglobin</td><td>" . $row['haemoglobin'] . "</td><tr>";
                        echo "<tr><td>Body Consumptions</td><td>" . $row['bodyconsumptions'] . "</td><tr>";
                        echo "<br>";
                        echo"<br></tr>";
                         
                }
                echo "</table>";
                
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
    
    ?>
    
    