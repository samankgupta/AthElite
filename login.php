<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>AthElite | Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <nav id="mainNav">
        <div class="logo">
            <a href='index.html'><h1>AthElite</h1></a>
        </div>
        <ul>
            <li><a href='index.html'>Home</a></li>
            <li><a href='sports.html'>Sports</a></li>
            <li><a href='facilities.html'>Facilities</a></li>
            <li><a href='membership.html' id="active">Membership</a></li>
            <li><a href='contactus.html'>Contact Us</a></li>
        </ul>
    </nav>
    <div class="logincontainer">
    <form class="box" method="post">
  <h1>Login</h1>
  <input type="text" name="username" placeholder="Username" required="">
  <input type="password" name="password" placeholder="Password" required="">
    <input type="submit" name="login" value="Login">
    <?php
    if(isset($_REQUEST['login']))
    {
        include 'dbcon.php';
        $sql=$sql="select * from member where username='".$_REQUEST['username']."'and password='".$_REQUEST['password']."';";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result))
        {
            $_SESSION['username']=$_REQUEST['username'];
            header('Location:display.php');
        }
        else{ echo "<h5 align='center' style='color:#2ecc71; padding: 15px 0;'>wrong username or password<h5>"; }
    }
    ?>
  <a href="signup.front.php">New User? Sign Up.</a>
  <a href="forgot.php">Forgot Password?</a>  
</form>
</div>
    <script type="text/javascript" src='main.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>
</html>