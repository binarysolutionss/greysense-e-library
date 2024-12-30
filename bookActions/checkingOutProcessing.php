<?php

extract($_POST);
require('../registration/database.php');

$studentID = $_POST['studentID'];
$ISBN = $_POST['ISBN'];
$dateCheckOut = $_POST['dateCheckOut'];

$checkOut = "INSERT INTO borrowedbooks (studentID, ISBN, dateCheckOut) values ('$studentID', '$ISBN', '$dateCheckOut')";

if(mysqli_query($con, $checkOut))
{
    echo "<div class='dbConnError'>
    <h3>You have successfully checked out a book</h3><br/>
    <p class='link'>Click here to <a href='bookCheckOut.php'>check out another book</a> again.</p>
    </div>";
}
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your book check out</h3><br/>
    <p class='link'>Click here to <a href='bookCheckOut.php'> check out again</a> again.</p>
    </div>";
}

?>