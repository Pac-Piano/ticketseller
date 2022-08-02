<?php
$host="localhost";
$user="root";
$password="";
$db="t-seller";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Name=$_POST["name"];
    $Pass=$_POST["passw"];

    $sql="select * from signup where fname='".$Name."' AND  password='".$Pass."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);
    if($row){

    if($row["usertype"]=="user")
    {
        $_SESSION["name"]=$Name;

        header("location:index.php");
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION["name"]=$Name;

        header("location:admin.php");
        echo "LOGIN ERROR";
    }
    else{

        echo "admin";
    }

}
else{ 
      echo '<script type="text/javascript">
       window.onload = function () { alert("fname and pasword does not mathc"); } 
</script>'; 
    
}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>sign in here</title>
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
                    <li><a href="guest.php">GUEST</a></li>
                    <li><a href="abt.php">ABOUT</a></li> 
                    <li><a href="signup.php">SIGNUP</a></li>
                    </ul>
                </div>
                <form action="#" method="POST">
            <div class="sign">
                <h2>Login here</h2>
                <input type="txt" placeholder="Enter first-name here" name="name" required>
                <input type="password" placeholder="Enter password here" name="passw" required>
                <button type="submit" class="buto" name="send">LOGIN</button>
                <p class="link">Don't have an account<br>
                <a href="signup.php">signup</a> here</a></p>
            </div>
               </form>
        </div>
       
    </body>
</html>