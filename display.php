<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>AthElite | Account</title>
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
            <li><a href='membership.html'>Membership</a></li>
            <li><a href='contactus.html'>Contact Us</a></li>
        </ul>
    </nav>
    <div class="displaycontainer">
    	<div class="displaybox">
    		<h1 style='color:rgb(208, 255, 38); padding: 15px 0;'>Welcome <?php $name=$_SESSION['username']; echo $name;?></h1>
    		
            <?php $name=$_SESSION['username'];
			$sql="SELECT games.game , games.slot1, games.slot2 , games.slot3
            FROM sports
            INNER JOIN games ON sports.sport=games.game
            WHERE sports.username='".$name."';";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
            {
			    echo "<h3 align='center' style='color:rgb(52, 250, 115); padding: 15px 0;'>Your selected sports are :</h3>";
			    while($row=mysqli_fetch_assoc($result)){
                    echo "<div style='display:inline-block; justify-content:space-around;'><h4 style='color:rgb(208, 255, 38); padding: 8px 25px;'>".$row['game']."</h4><h5 style='padding: 5px 25px;'>".$row['slot1']."<br>".$row['slot2']."<br>".$row['slot3']."</h5></div>";
			    }
			}
			else{echo "you have not selected any sports";}  
            ?>

		    <h3><a href="add.php">Add Sport</a></h3>
		    <h3><a href="delete.php">Delete Sport</a></h3>
		    <p><a href="login.php" id="logout">logout</a></p>
    	</div>
	</div>
    <script type="text/javascript" src='main.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>
</html>

