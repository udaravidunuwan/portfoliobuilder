<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'project_portfolio_db';

// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    die('Connection failed: ' .mysqli_connect_error());
}


// Database operations here

// Close the connection
// mysqli_close($connection);

