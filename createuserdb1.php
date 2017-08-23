<?php

	
Require_once 'serverInfo.php'; 

function connectToDb()
{
	try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=safemove", 'root', '');
    }
    catch(PDOException $e)
    {
        die($e->getMessage());
    }
}


    $first_name = $_REQUEST['fname'];
    $last_name = $_REQUEST['lname'];
    $birthdate = $_REQUEST['birthdate'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

function insertquery($pdo)
{
	$statement = $pdo->prepare('INSERT INTO users (firstname, lastname, birthdate, email, password) VALUES ('$first_name', '$last_name', '$birthdate', '$email', '$password')');

	$statement->execute();
}   

?>