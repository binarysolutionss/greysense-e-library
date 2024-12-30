<?php

extract($_POST);
require('../registration/database.php');

$studentID = $_POST['studentID'];

$deleteStudent = "DELETE FROM students WHERE StudentID='$studentID'";

if(mysqli_query($con, $deleteStudent))
 {
    echo "<div class='dbConnError'>
    <h3>You have successfully deleted a student</h3><br/>
    <p class='link'>Click here to <a href='deleteStudent.php'>delete another student</a></p>
    </div>";
 }
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your student deletion</h3><br/>
    <p class='link'>Click here to <a href='deleteStudent.php'>delete</a> again.</p>
    </div>";
}

?>