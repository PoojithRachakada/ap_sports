<!DOCTYPE html>
<html> 
    <title>Menu page
    </title>
    <body><div class="div">
        <div class="insert">
            <h1>Insert Details</h1>
        <input class="gradient-button gradient-button-1"type="button" onclick="location.href='page.php'" value="Personal Details"><br>
        <input class="gradient-button gradient-button-2"type="button" onclick="location.href='fitness.php'" value="Fitness Details"><br>
        <input class="gradient-button gradient-button-3"type="button" onclick="location.href=''" value="Skill Test"><br>
        <input class="gradient-button gradient-button-4"type="button" onclick="location.href=''" value="Anthropermatic tests"><br>
        <input class="gradient-button gradient-button-5"type="button" onclick="location.href=''" value="Pysiological Measurments"><br>
        </div>
        <div class="dis">
            <h1>Getting Details</h1>
            <input class="gradient-button gradient-button-1"type="button" onclick="location.href='display.php'"value="Display"><br>
        </div>
        </div>
    </body>
</html>
<style>
body{
    background: url(2.gif);
    min-height: 800px;
    background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     position: relative;
  }
  .insert{float:left;}
  .dis{float:right;}
  .gradient-button {
    margin: 10px;
    font-family: "Arial Black", Gadget, sans-serif;
    font-size: 20px;
    padding: 15px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: #FFF;
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    width: 200px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    cursor: pointer;
    display: inline-block;
    border-radius: 25px;
}
.gradient-button:hover{
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    margin: 8px 10px 12px;
}
.gradient-button-1 {background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%)}
.gradient-button-1:hover { background-position: right center; }

.gradient-button-2 {background-image: linear-gradient(to right, #2BC0E4 0%, #EAECC6 51%, #2BC0E4 100%)}
.gradient-button-2:hover { background-position: right center; }

.gradient-button-3 {background-image: linear-gradient(to right, #7474BF 0%, #348AC7 51%, #7474BF 100%)}
.gradient-button-3:hover { background-position: right center; }

.gradient-button-4 {background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5 51%, #00d2ff 100%)}
.gradient-button-4:hover { background-position: right center; }
}
.insert{
    width: 50%;
}
}
.dis{
    width: 50%;
}
</style>