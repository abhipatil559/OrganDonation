 <?php

    $servername = "localhost";
    $username = "root"; // default username for localhost is root
    $password = ""; // default password for localhost is empty
    $dbname = "organdonation"; // database name

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname)or die(mysqli_error($con));

?> 