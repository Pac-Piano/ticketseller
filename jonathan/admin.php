<?php
require("db.php");
session_start();

$query="SELECT * FROM signup";
$re = mysqli_query($con,$query);

$querty="SELECT * FROM buyer";
$req = mysqli_query($con,$querty);

/*while($row=mysqli_fetch_array($re)){
      echo $row['id']." ".$row['fname']." ".$row['lname']."<br/>";
    }*/
?>
<!DOCTYPE html>
 <html>
 <head>
    <title>admin</title>
    <link rel="stylesheet" href="style3.css">
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
                    <li><a href="admin.php">ADMIN_<?php echo $_SESSION["name"];?></a></li>
                </ul>
            </div>
        </div>
       <div class="wrapper">
        <div class="box1">
            <ol>
                <li><u><b>EVENT LIST</b></u></li>
                <li>APR VS RAYON</li>
                <li>SINGLES PARTY</li>
                <li>SINGLES PARTY</li>
                <li>SUMMER VIBES</li>
                <li>NIGHT RUN</li>
            </ol>    
        </div>
        <div class="box2">
        <ol>
                <li><u><b>DAILY SELLS</b></u></li>
                <?php 
                if($req){
                    while($row=mysqli_fetch_array($req)){
                      echo $row['name']."- ".$row['class']."- ".$row['payment']." -".$row['event']."<br/>";
                    }
                  }else{
                    echo "wrong query".mysqli_error($row);
                  }
                ?>
            </ol> 
        </div>
        <div class="box3">
        <ol>
                <li><u><b>ACCOUNTS</b></u></li>
                <?php 
                if($re){
                    while($row=mysqli_fetch_array($re)){
                      echo $row['id']." ".$row['fname']." ".$row['lname']."<br/>";
                    }
                  }else{
                    echo "wrong query".mysqli_error($row);
                  }
                ?>
            </ol> 
        </div>
       </div>
    </div>
 </body>
 </html>