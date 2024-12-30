<?php

extract($_POST);
require('../registration/database.php');

$studentFirstName = $_POST['studentFirstName'];
$studentSurname = $_POST['studentSurname'];
$studentID = $_POST['studentID'];
$studentEmail = $_POST['studentEmail'];
$studentAddress = $_POST['studentAddress'];

$addStudent = "INSERT INTO students (studentID, studentFirstName, studentSurname, studentEmail, studentAddress) values ('$studentID', '$studentFirstName', '$studentSurname', '$studentEmail', '$studentAddress')";

if(mysqli_query($con, $addStudent))
 {
    echo "<span class='dbConnError'>
    <h3>You have successfully added a student</h3><br/>
    <p class='link'>Click here to <a href='addStudent.php'>add another student</a></p>
    </span>";
 }
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your student addition</h3><br/>
    <p class='link'>Click here to <a href='addStudent.php'>add student again</a></p>
    </div>";
}

?>