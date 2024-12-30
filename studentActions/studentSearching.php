<?php

extract($_POST);
require('../registration/database.php');

$studentID = $_POST['studentID'];

$searchStudent = "SELECT studentID, studentFirstName, studentSurname, studentEmail, studentAddress FROM students where studentID='$studentID'";

$studentAvailable = mysqli_query($con, $searchStudent);

if(mysqli_num_rows($studentAvailable)>0)
{
    while($row = mysqli_fetch_assoc($studentAvailable))
    {
        echo "<div class='dbConnError'>
        <h3>Student found</h3><br/>
        </div>";
        echo "Student ID: " . $row["studentID"]. "<br>"; 
        echo "Student's First Name: " . $row["studentFirstName"]. "<br>";
        echo "Student's Surname: " . $row["studentSurname"]. "<br>";
        echo "Student's E-Mail Address: " . $row["studentEmail"]. "<br>";
        echo "Student's Physciaal Home Address: " . $row["studentAddress"]. "<br>";
       
        echo "<div class='dbConnError'>
        <p class='link'>Click here to <a href='searchStudent.php'>search for another student</a>.</p>
        </div>";
    }
}
else
{
    echo "<div class='dbConnError'>
    <h3>Book not found</h3><br/>
    <p class='link'>Click here to <a href='searchStudent.php'>search for student</a> again.</p>
    </div>";
}

?>