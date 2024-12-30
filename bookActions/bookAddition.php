<?php

extract($_POST);
require('../registration/database.php');

$bookTitle = $_POST['bookTitle'];
$authorFirstName = $_POST['authorFirstName'];
$authorSurname = $_POST['authorSurname'];
$authorKey = $_POST['authorKey'];
$yearOfPub = $_POST['yearOfPub'];
$ISBN = $_POST['ISBN'];

$addBook = "INSERT INTO books (ISBN, bookTitle, authorFirstName, authorSurname, authorID, yearOfPub) values ('$ISBN', '$bookTitle', '$authorFirstName', '$authorSurname', '$authorKey', '$yearOfPub')";

if(mysqli_query($con, $addBook))
{
    echo "<div class='dbConnError'>
    <h3>You have successfully added a book</h3><br/>
    <p class='link'>Click here to <a href='addBook.php'>add another book</a> again.</p>
    </div>";
}
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your book addition</h3><br/>
    <p class='link'>Click here to <a href='addBook.php'>add book again</a> again.</p>
    </div>";
}

?>