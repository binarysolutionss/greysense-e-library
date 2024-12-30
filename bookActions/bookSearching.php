<?php

extract($_POST);
require('../registration/database.php');

$ISBN = $_POST['ISBN'];

$searchBook = "SELECT ISBN, bookTitle, authorFirstName, authorSurname, authorID, yearOfPub FROM books where ISBN='$ISBN'";

$bookAvailable = mysqli_query($con, $searchBook);

if(mysqli_num_rows($bookAvailable)>0)
{
    while($row = mysqli_fetch_assoc($bookAvailable))
    {
        echo "<div class='dbConnError'>
        <h3>Book found</h3><br/>
        </div>";
        echo "Book Title: " . $row["bookTitle"]. "<br>"; 
        echo "ISBN: " . $row["ISBN"]. "<br>";
        echo "Author's First Name: " . $row["authorFirstName"]. "<br>";
        echo "Author's Surname: " . $row["authorSurname"]. "<br>";
        echo "Author ID: " . $row["authorID"]. "<br>";
        echo "Year of Publication: " . $row["yearOfPub"]. "<br>";
       
        echo "<div class='dbConnError'>
        <p class='link'>Click here to <a href='searchBook.php'>search for another book</a>.</p>
        </div>";
    }
}
else
{
    echo "<div class='dbConnError'>
    <h3>Book not found</h3><br/>
    <p class='link'>Click here to <a href='searchBook.php'>search for book</a> again.</p>
    </div>";
} 

?>