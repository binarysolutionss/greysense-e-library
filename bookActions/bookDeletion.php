<?php

extract($_POST);
require('../registration/database.php');

$ISBN = $_POST['ISBN'];

$deleteBook = "DELETE FROM books WHERE ISBN='$ISBN'";

if(mysqli_query($con, $deleteBook))
 {
    echo "<div class='dbConnError'>
    <h3>You have successfully deleted a book</h3><br/>
    <p class='link'>Click here to <a href='deleteBook.php'>delete another book</a></p>
    </div>";
 }
else
{
    echo "<div class='dbConnError'>
    <h3>There has been a problem with your book deletion</h3><br/>
    <p class='link'>Click here to <a href='deleteBook.php'>deleteBook.php</a> delete again.</p>
    </div>";
}

?>