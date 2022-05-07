<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // Include file which makes the Database Connection.

        include 'connection.php';


        $name = $_POST["Name"]; 
        $email = $_POST["Email"]; 
        $phoneNo = $_POST["PhoneNo"];
        $messages = $_POST["Message"];

    // The below sql query is use to check if the fname is already present or not in our Database
        $sql = "Select * from users where fname='$name'";
        
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result); 

        if($num == 0) {
            $sql = "INSERT INTO users (fname, email, phoneNo, messages) VALUES ($name, $email, $phoneNo, $messages)";

            if (mysqli_query($conn, $sql))
            {
                echo "New record created successfully";
            } else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

    }
    mysqli_close($conn);

?>