<?php
session_start();
if(isset($_REQUEST['signup']))
{
    include 'dbcon.php';

    $username=$_REQUEST['username'];
    $sports=$_REQUEST['sports'];
    $mobile_no=$_REQUEST['mobile_no' ];
    $email_id=$_REQUEST['email_id'];
    $dob=$_REQUEST['dob'];
    $gender=$_REQUEST['gender'];
    $password1=$_REQUEST['password1'];
    $password2=$_REQUEST['password2'];
    

    
   if(empty($username)||empty($sports)||empty($mobile_no)||empty($email_id)||empty( $dob)||empty($gender)||empty($password1)||empty($password2)){
        header("Location:signup.front.php?error=emptyfields");
        exit();
    }
    else if(!filter_var($email_id,FILTER_VALIDATE_EMAIL)){
        header("Location:signup.front.php?error=invalidemail");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location:signup.front.php?error=invalidusername");
        exit();
    }
    else if(!preg_match("/^[0-9]*$/",$mobile_no)){
        header("Location:signup.front.php?error=invalidmobile");
        exit();
    }
    else if($password1!==$password2){
        header("Location:signup.front.php?error=passwordcheck");
        exit();
    }
    else{
        $sql1="INSERT INTO member VALUES ('".$username."', '".$password1."', '".$mobile_no."', '".$email_id."', '".$dob."', '".$gender."')";
        $result=mysqli_query($conn,$sql1);
        if(!$result){
            header("Location:signup.front.php?error=usernametaken");
        exit();
        }
        else{
            
            for($i=0; $i<count($sports); $i++){
                $sql="insert into sports values('".$username."','".$sports[$i]."');";
                mysqli_query($conn,$sql);
            
            }
            $_SESSION['username']=$username;
            header("Location:display.php");
        }
           
    }
    
    
}
?>