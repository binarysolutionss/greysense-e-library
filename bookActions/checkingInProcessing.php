<?php

extract($_POST);
require('../registration/database.php');

$studentID = $_POST['studentID'];
$ISBN = $_POST['ISBN'];
$dateCheckOut = $_POST['dateCheckOut'];

$checkIn = "DELETE FROM borrowedbooks WHERE ISBN='$ISBN' && studentID='$studentID'";

if(mysqli_query($con, $checkIn))
 {
    echo "<div class='dbConnError'>
    <h3>You have successfully checked in a book</h3><br/>
    <p class='link'>Click here to <a href='bookCheckIn.php'>check IN another book</a> again.</p>
    </div>";
 }
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your book check in</h3><br/>
    <p class='link'>Click here to <a href='bookCheckIn.php'>check in book again</a> again.</p>
    </div>";
}

?>