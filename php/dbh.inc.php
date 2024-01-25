<?php
    // Db Connction
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "mystore";
    $errors = array();

    //My SQLi connection using above parametters
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if($conn){
        echo "Database success!";
    }
?>