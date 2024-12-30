<?php

extract($_POST);
require('database.php');

$username = $_POST['username'];
$userPassword = $_POST['userPassword'];

$login = "SELECT * FROM users where userID='$username' and userPassword='$userPassword'";

$success = mysqli_query($con, $login);

$num = mysqli_num_rows($success);

if($num == 1)
{
    header("Location: dashboard.php");
}
else
{
    header("Location: login.php");
}

?>