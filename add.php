<?php
session_start();
include 'dbcon.php';
$name=$_SESSION['username'];
if(isset($_REQUEST['add'])){
    if(!empty($_REQUEST['sports']))
    {
    $sports=$_REQUEST['sports'];
    for($i=0; $i<count($sports); $i++){
        $sql="insert into sports values('".$name."','".$sports[$i]."');";
        mysqli_query($conn,$sql);
    }
    }
}?>
<!DOCTYPE html>
<html>
<head>
    <title>AthElite | Add Sports</title>
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
    <div class="addcontainer">
        <div class="addbox">
            <?php $name=$_SESSION['username'];
            $sql="select sport from sports where username='".$name."';";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                echo "<h3 align='center' style='color:rgb(52, 250, 115); padding: 15px 0;'>Your selected sports are :</h3>";
                while($row=mysqli_fetch_assoc($result)){
                    echo "<h4 style='color:rgb(208, 255, 38); padding: 10px 25px; display:inline-block; justify-content:space-around;'>".$row['sport']."</h4>";
                }
            }
            else{echo "you have not selected any sports";}  ?>
            <form align='center' method='post'>
            <h4>Choose the sports you want to add :</h4><br>
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
            <td><input type="checkbox" id="lawntennis" name='sports[]' value="Lawn Tennis"></td>
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
        </table><br>
            <input type="submit" name="add">
            </form>
            <a href="display.php">Go Back</a>
        </div>
    </div>
    
    <script type="text/javascript" src='main.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>
</html>