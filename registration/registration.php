<?php

extract($_POST);
require('database.php');

$firstName = $_POST['firstName'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$userEmail = $_POST['userEmail'];
$userPassword = $_POST['userPassword'];

$usernameCheck = "SELECT * from users WHERE userID='$username'";

$usernameTaken = mysqli_query($con, $usernameCheck);

$num = mysqli_num_rows($usernameTaken);
    
if($num == 1)
{
    echo "<div class='dbConnError'>
    <h3>Sorry, this username has already been taken</h3><br/>
    <p class='link'>Click here to <a href='signup.php'>Sign Up</a> again.</p>
    </div>";
}
else
{
    $signup = "INSERT INTO users(userID, userPassword, userFirstName, userSurname, userEmail) VALUES ('$username', '$userPassword','$firstName','$surname','$userEmail')";
    mysqli_query($con, $signup);
    echo "<div class='dbConnError'>
    <h3>You have successfully signed up.</h3><br/>
    <p class='link'>Click here to <a href='login.php'>Login</a>.</p>
    </div>";
}  

?>