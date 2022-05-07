<?php
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phoneNo = $_POST["PhoneNo"];
    $messages = $_POST["Message"];

    require 'connection.php';

    $sql = "INSERT INTO getInTouch (fname, email, phoneNo, messages)VALUES ($name, $email, $phoneNo, $messages)";

    if (mysqli_query($conn, $sql))
    {
        echo "New record created successfully";
    } else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>