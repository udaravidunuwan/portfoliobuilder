<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'project_portfolio_db';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die('Connection failed: ' .mysqli_connect_error());
}


// Database operations here

// Close the connection
// mysqli_close($connection);

?>