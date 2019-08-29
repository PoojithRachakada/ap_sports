<html>
    <head>
        <title>
            REGISTER HERE
        </title>
        <body>
            <h1 class="reg">PLEASE REGISTER HERE..</h1>
            <form action="insert.php" method="post" class="forms">
                <input name="name" id="us" placeholder="ENTER NAME" type="text" required><br><br>
                <input name="mail" id="mail" placeholder="EMAIL" type="email" ><br><br>
                <input name="password" id="pas" placeholder="ENTER PASSWORD" type="password" required><br><br>
                <input name="rpassword" id="rpas" placeholder="RE-ENTER PASSWORD" type="password" ><br><br>
                <input name="mobile" id="mob" placeholder="ENTER MOBILE" type="number" ><br><br>
                <input class="buton"name="submit" type="submit" id="sub" value="REGISTER">
            </form>
            <a href="home.php" class="home">GOTO LOGIN PAGE..</a>

        </body>
    </head>

<style>
        body{
            background-image: url("12.jpg"); 
            background-repeat: no-repeat;
            background-size: 100%;           
        }
.wel{
    text-align: center;
    font-family:'Times New Roman', Times, serif;
    color:aliceblue;
}
.buton{
    border-radius: 5px;
    position: absolute;
    left:650px;
    top:240px;
    width:100px;
    height:30px;
    cursor: pointer;
    background-color: rgb(255, 18, 18);
    color: aliceblue;
}
.reg{
    text-align:center;
    text-shadow:0 2px 0 rgb(9, 235, 28);
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color:rgb(253, 14, 14);
}
.forms{
    position:absolute;
    top:150px;
    left:600px;
}
#us,#pas,#rpas,#mob,#mail{
    border-width: 2px;
    border-style: solid;
    border-color:black;
    width:200px;
    height:30px;
    background-color: rgb(202, 202, 202)
}
#sub{
    position: absolute;
    left:60px;
    top:290px;
    cursor: pointer;
}
.home{
position: absolute;
top:480px;
left:600px;
color: rgb(0, 247, 21);
}

        </style>
</html>

