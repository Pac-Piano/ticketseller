<?php
	session_start();
?>
  <!DOCTYPE html>
 <html>
 <head>
    <title>welcome-user</title>
    <link rel="stylesheet" href="style2.css">
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
                    <li><a href="buy.php">BUY TICKET</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
					<li><a><?php echo $_SESSION["name"];?></a></li>
                </ul>
            </div>
        </div>
       <div class="wrapper">
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="box5"></div>
        <div class="box6"></div>
       </div>
       <div class="parag"> <br>welcome now you are a standard user!  </div>
    </div>
 </body>
 </html>