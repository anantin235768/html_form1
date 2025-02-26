<?php 
    var_dump(value: $_POST);
    $servename = "localhost";
    $servename ="root";
    $password = "";
    ?>

    <?php

    // Create connection
    $con  = new mysqli(hostname:$servername, username: $username, password: $password);

    // check connection
    if ($con->connect_error) {
        die("...Connection failed: " . $conn->connect_error);

    }
    echo "connected successfully";
    ?>
    
    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO student_record (id, fullname, gender, country)
    VALUES ('NULL', '$fulname', '$gender, '$country')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }