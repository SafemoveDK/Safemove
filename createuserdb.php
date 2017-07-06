<?php
    //Retrives server information once
    Require_once 'serverInfo.php'; 
    
    // connection requirements to database
    $connection = mysqli_connect($db_hostname, $db_username, $db_password);
    
    //Throws exception if error in connection
    if(!$connection)
    {
        die("Kan ikke forbinde til MySQL: " . mysqli_connect_error());
    }
    
    // Connects to database
    $selected_db = mysqli_select_db($connection, $db_database);
    
    //Throws exception if error in connection
    if(!$selected_db)
    {
        die("Kunne ikke vælge database: " . mysqli_connect_error());
    }
    
    $first_name = mysqli_real_escape_string($selected_db, $_REQUEST['fname']);
    $last_name = mysqli_real_escape_string($selected_db, $_REQUEST['lname']);
    $birthdate = mysqli_real_escape_string($selected_db, $_REQUEST['birthdate']);
    $email = mysqli_real_escape_string($selected_db, $_REQUEST['email']);
    $password = mysqli_real_escape_string($selected_db, $_REQUEST['password']);
    
    $insertquery = "INSERT INTO users (firstname, lastname, birthdate, email, password) VALUES ('$first_name', '$last_name', '$birthdate', '$email', '$password')";
    
    if(mysqli_query($selected_db, $insertquery))
    {
        echo "Du har nu oprettet en bruger - Velkommen til Safemove";
    }
    else
    {
        echo "Fejl - kunne ikke eksekvere $insertquery. " . mysqli_error($selected_db);
    }
    
    mysqli_close($selected_db);
?>