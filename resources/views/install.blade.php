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

    $sql_adduser1 = " INSERT INTO accounts values(1, 'hadialkhansa@gmail.com', '6c1e7410193b6370b28eb597bc6d82972e5d1fc1b11a0086b1978d641bf9ad4d', 'Hadi', 1550) ";
    $sql_adduser2 = " INSERT INTO accounts values(2, 'ali@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'Ali', 1250) ";
    $sql_adduser3 = " INSERT INTO accounts values(3, 'samismail@gmail.com', 'cf0b854f5a17fdad773d462438d4d7328722b817d40a74ecb8d9ad79f98aa251', 'Sami', 998) ";
    $sql_adduser4 = " INSERT INTO accounts values(4, 'rashasleiman@gmail.com', '777524f0cf9c792596eb2b3c57801dbd37b6999910d7e693922ab25c9193faa9', 'Rasha', 1300) ";

    // Step 3: Call mysqli_multi_query function
    if (mysqli_multi_query($conn, $sql))
        echo "Tables created and data inserted successfully.";
    else
        echo "Error: " . mysqli_error($conn);

    //step 4: add data
    mysqli_multi_query($conn, $sql_adduser1);
    mysqli_multi_query($conn, $sql_adduser2);
    mysqli_multi_query($conn, $sql_adduser3);
    mysqli_multi_query($conn, $sql_adduser4);
    
    // Step 5: Close the database connection
    mysqli_close($conn);
?>