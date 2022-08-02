<?php
require("db.php");
session_start();

if(ISSET($_POST["send"]))
{ 

  $Name=$_REQUEST["name"];
  $Class=$_REQUEST["class"];
  $Meth=$_REQUEST["meth"];
  $Event=$_REQUEST["event"];

 $query = "INSERT INTO buyer(name,class,payment,event) VALUES( '$Name','$Class','$Meth','$Event')";
 
$rs= mysqli_query($con,$query);

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>buy ticket here</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">T-Seller</h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="abt.php">ABOUT</a></li> 
                        <li><a href="guest.php">GUEST</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                        <li><a><?php echo $_SESSION["name"];?></a></li>
                    </ul>
                </div>
            </div>   
            <form method="POST" action="">   
            <div class="sign">
                <h2>Buy your ticket</h2>
                <input type="txt" placeholder="Enter name here" name="name">
                <label for="class" >CHOOSE CLASS</label></br>
                <select name="class" id="class" placeholder="Select the Class">
                    <option value="vvip">VVIP</option>
                    <option value="vip">VIP</option>
                    <option value="regural">REGURAL</option>
                    <option value="cheap">CHEAP</option></br>
                    </select>
                    <label for="meth" >CHOOSE PAYMENT METHOD</label></br>
                <select name="meth" id="class" placeholder="Select the Class">
                    <option value="VISA CARD">VISA CARD</option>
                    <option value="MOMO">MOMO</option>
                    <option value="TIGO-CASH">TIGO CASH</option>
                    <option value="M-CASH">M-CASH</option></br>
                    </select>
                    <label for="meth" >CHOOSE EVENT:</label></br>
                <select name="event" id="class" placeholder="Select the Class">
                    <option value="APR VS RAYON">APR VS RAYON</option>
                    <option value="SINGLES PARTY">SINGLES PARTY</option>
                    <option value="PRAISE PARTY">PRAISE PARTY</option>
                    <option value="SUMER VIBES">SUMER VIBES</option></br>
                    <option value="NIGHT RUN">NIGHTRUN</option>
                    </select>
                <button type="submit" class="buto" name="send">SUBMIT</button>
            </div>
           </form>
        </div>
    </body>
</html>