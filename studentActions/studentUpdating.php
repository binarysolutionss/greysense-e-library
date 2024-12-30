<?php

extract($_POST);
require('../registration/database.php');

$studentFirstName = $_POST['studentFirstName'];
$studentSurname = $_POST['studentSurname'];
$studentID = $_POST['studentID'];
$studentEmail = $_POST['studentEmail'];
$studentAddress = $_POST['studentAddress'];

$updateStudent = "UPDATE students SET studentID ='$studentID', studentFirstName='$studentFirstName', studentSurname='$studentSurname', studentEmail='$studentEmail', studentAddress='$studentAddress' WHERE studentID='$studentID'";

if(mysqli_query($con, $updateStudent))
{
    echo "<div class='dbConnError'>
    <h3>You have successfully updated a student</h3><br/>
    <p class='link'>Click here to <a href='updateStudent.php'>update another student</a>'s records.</p>
    </div>";
}
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your book addition</h3><br/>
    <p class='link'>Click here to <a href='updateStudent.php'>update student</a> again.</p>
    </div>";
}

?>