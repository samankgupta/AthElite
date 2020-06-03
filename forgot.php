<!DOCTYPE html>
<html>
<head>
    <title>AthElite | Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
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
    <div class="forgotcontainer">
<form align='center' method='post' class="forgotbox">
		<label for="username"> Username </label><br>
        <input type="text" name="username" id="username" placeholder="Username"><br><br>
        <label for="email_id"> Email </label><br>
        <input type="email" name="email_id" id="email_id" placeholder="Email"><br><br>
        <label for="password"> New Password </label><br>
        <input type="password" name="password" id="password" placeholder="New Password"><br><br>
	<input type='submit' name='set' value='Set'>
	<?php
	include 'dbcon.php';
	if (isset($_REQUEST['set']))
	{
	  $username=$_REQUEST['username'];
	  $password=$_REQUEST['password'];
	  $email_id=$_REQUEST['email_id'];
	  $sql1="SELECT * FROM member where username='".$username."' AND email_id='".$email_id."';";
	  $sql2="UPDATE `member` SET password ='".$password."' WHERE username ='".$username."';";
	  $result=mysqli_query($conn,$sql1);
	  $row=mysqli_num_rows($result);
	  if($row)
	  {mysqli_query($conn,$sql2);
	  echo "<p align='center' style='top: 50px; position: relative; padding: 0;'>your password has been changed</p>";}
	  else{echo "<p align='center' style='top: 50px; position: relative; padding: 0;'>wrong username/email</p>";}
	}
	?>
	<a href='login.php'>Login</a>
</form>
</div>
    <script type="text/javascript" src='main.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>
</html>