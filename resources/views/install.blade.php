<?php

    $conn = mysqli_connect('localhost', 'root', '');

    // Check connection
    if (!$conn) 
        die("Connection failed: " . mysqli_connect_error());
    
    // Create database
    $sql = "CREATE DATABASE quizwebsitedb";
    if (mysqli_query($conn, $sql))
        echo "Database created successfully";
    else 
        echo "Error creating database: " . mysqli_error($conn);

    // Close connection
    mysqli_close($conn);

    // Step 1: Establish a database connection that you created 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizwebsitedb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Step 2: Write the SQL queries (can write all the queries by exporting them from php my admin )
    $sql = "CREATE TABLE accounts (
        id int,
        username varchar(255),
        password varchar(255),
        full_name varchar(255),
        rating varchar(255)
    );";

    // Step 3: Call mysqli_multi_query function
    if (mysqli_multi_query($conn, $sql))
        echo "Tables created and data inserted successfully.";
    else
        echo "Error: " . mysqli_error($conn);

    // Step 4: Close the database connection
    mysqli_close($conn);
?>