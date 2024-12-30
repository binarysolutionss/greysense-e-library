<?php

extract($_POST);
require('../registration/database.php');

$bookTitle = $_POST['bookTitle'];
$authorFirstName = $_POST['authorFirstName'];
$authorSurname = $_POST['authorSurname'];
$authorKey = $_POST['authorKey'];
$yearOfPub = $_POST['yearOfPub'];
$ISBN = $_POST['ISBN'];

$updateBook = "UPDATE books SET ISBN ='$ISBN', bookTitle='$bookTitle', authorFirstName='$authorFirstName', authorSurname='$authorSurname', authorID='$authorKey', yearOfPub='$yearOfPub' WHERE ISBN='$ISBN'";

if(mysqli_query($con, $updateBook))
{
    echo "<div class='dbConnError'>
    <h3>You have successfully updated a book</h3><br/>
    <p class='link'>Click here to <a href='updateBook.php'>update another book</a></p>
    </div>";
}
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your book updating</h3><br/>
    <p class='link'>Click here to <a href='updateBook.php'>update book</a> again.</p>
    </div>";
}

?>