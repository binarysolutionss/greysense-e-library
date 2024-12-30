<?php
    //Host name, database username, password, and database name.
    $con = mysqli_connect("localhost","root","","greysense_library");
    // Check connection
    if (mysqli_connect_errno()){
        echo "<div class='dbConnError'>
        <h3>Failed to connect to MySQL</h3><br/>
        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
        </div>";
    }
?>