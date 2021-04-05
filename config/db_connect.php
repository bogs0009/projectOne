<?php

// MySQL i or PDO

    // connet to database
    $conn = mysqli_connect("localhost", "john", "test1234", "ninja_pizza");

    // check connection
    if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
    }

?>