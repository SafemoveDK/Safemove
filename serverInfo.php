<?php
    $db_hostname = ´localhost´;
    $db_database = ´users´;
    $db_username = ´root´;
    $db_password = ´´;
    
    require_once ´openDatabase.php´;
    $connection = mysqli_connect($db_hostname, $db_username, $db_password);
    
    if(!$connection)
    {
        die("Kan ikke forbinde til MySQL: " . mysqli_connect_error());
    }
    
    $selected_db = mysqli_select_db($connection, $db_database);
    
    if(!$selected_db)
    {
        die("Kunne ikke vælge database: " . mysqli_connect_error());
    }
?>