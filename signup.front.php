<?php
include "signup.back.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>AthElite | Sign Up</title>
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
	<div class="signupcontainer">
		<?php
if(isset($_GET['error'])){
    if($_GET['error']=="emptyfields"){echo "<h4 align='center' style='color:rgb(129, 245, 66); padding-top:150px;'>Fill all the fields<h4>";}
    if($_GET['error']=="invalidemail"){echo "<h4 align='center' style='color:rgb(129, 245, 66); padding-top:150px;'>Give a valid email address<h4>";}
    if($_GET['error']=="invalidusername"){echo "<h4 align='center' style='color:rgb(129, 245, 66); padding-top:150px;'>Username can contain only letters and numbers<h4>";}
    if($_GET['error']=="invalidmobile"){echo "<h4 align='center' style='color:rgb(129, 245, 66); padding-top:150px;'>Give a valid mobile number<h4>";}
    if($_GET['error']=="passwordcheck"){echo "<h4 align='center' style='color:rgb(129, 245, 66); padding-top:150px;'>Passwords do not match<h4>";}
    if($_GET['error']=="usernametaken"){echo "<h4 align='center' style='color:rgb(129, 245, 66); padding-top:150px;'>Username has already been taken<h4>";}
}
?>
		<div class="signinbtn">
		<h4>Already a Member?</h4>
		<a href="login.php">Sign In</a>
	</div>
	 <div class = "register">
        <h2>Register Here</h2>
      <form method="post" id="registerform" action="">       
        <label for="username"> Username </label><br>
        <input type="text" name="username" id="username" placeholder="Username"><br><br>
        <label for="mobile_no"> Mobile Number </label><br>
        <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile number"><br><br> 
        <label for="email_id"> Email </label><br>
        <input type="email" name="email_id" id="email_id" placeholder="Email"><br><br>
        <label for="dob">Date of Birth</label><br>
		<input type="date" id="dob" name="dob"><br><br>
        <label for="gender"> Gender </label><br>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>
        <label> Sports </label><br><br>
        <table class="sportscheckbox">
        <tr>
        	<td><input type="checkbox" id="cricket" name='sports[]' value="Cricket"></td>
			<td><label for="cricket">Cricket</label></td>
			<td><input type="checkbox" id="football" name='sports[]' value="Football"></td>
			<td><label for="football">Football</label></td>
			<td><input type="checkbox" id="basketball" name='sports[]' value="Basketball"></td>
			<td><label for="basketball">Basketball</label></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="swimming" name='sports[]' value="Swimming"></td>
			<td><label for="swimming">Swimming</label></td>
			<td><input type="checkbox" id="lawntennis" value="Tennis"></td>
			<td><label for="lawntennis">Lawn Tennis</label></td>
			<td><input type="checkbox" id="hockey" name='sports[]' value="Hockey"></td>
			<td><label for="hockey">Hockey</label><br></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="badminton" name='sports[]' value="Badminton"></td>
			<td><label for="badminton">Badminton</label></td>
			<td><input type="checkbox" id="tabletennis" name='sports[]' value="Table Tennis"></td>
			<td><label for="tabletennis">Table Tennis</label></td>
			<td><input type="checkbox" id="volleyball" name='sports[]' value="Volleyball"></td>
			<td><label for="volleyball">Volleyball</label><br></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="athletics" name='sports[]' value="Athletics"></td>
			<td><label for="athletics">Athletics</label></td>
			<td><input type="checkbox" id="wrestling" name='sports[]' value="Wrestling"></td>
			<td><label for="wrestling">Wrestling</label></td>
			<td><input type="checkbox" id="karate" name='sports[]' value="Karate"></td>
			<td><label for="karate">Karate</label><br></td>
		</tr>
        </table><br><br>
        <label for="password"> Password </label><br>
        <input type="password" name="password1" id="password1" placeholder="Password"><br><br>
        <label for="cpassword">Confirm Password </label><br>
        <input type="password" name="password2" id="password2" placeholder="Confirm Password"><br><br><br>
        <input type="submit" name="signup" value="sign up" id ="sub">
      </form>
      </div>
	</div>
	
	<script type="text/javascript" src='main.js'></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  	AOS.init();
	</script>

</body>
</html>