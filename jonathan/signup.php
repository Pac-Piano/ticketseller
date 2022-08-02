<?php
require("db.php");

if(ISSET($_POST["send"]))
{ 

  $Fname=$_REQUEST["fname"];
  $Lname=$_REQUEST["lname"];
  $pass=$_REQUEST["paswords"];
  $comf=$_REQUEST["comfirm"];

 $query = "INSERT INTO signup(fname,lname,password,comfirm) VALUES( '$Fname','$Lname','$pass','$comf')";
 
$rs= mysqli_query($con,$query);

}

?>
<hr/>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
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
                        <li><a href="abt.php">ABOUT</a></li> 
                        <li><a href="guest.php">GUEST</a></li>
                        <li><a href="signin.php">SIGNIN</a></li>
                    </ul>
                </div>
            </div>  
            <form method="POST" action="">    
            <div class="sign" >
                <h2>Signup</h2><form>
                <input type="txt" placeholder="Enter first-name here" name="fname" required>
                <input type="txt" placeholder="Enter last-name here" name="lname" required>
                <input type="password" placeholder="Enter password here" name="paswords" required>
                <input type="password" placeholder="confirm your password" name="comfirm"required>
                <button type="submit" class="buto" name="send">SUBMIT</button>
            </div>
            </form>
        </div>
    </body>
</html>