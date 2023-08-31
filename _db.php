<?php

// Database informations
$server = "localhost";
$username = "root";
$password = "";
$database = "loginsystem";

// connecting database
$db = mysqli_connect($server, $username, $password, $database);

// checking database connection
if (!$db) {
    die('Connection Error >>' . mysqli_connect_error());
}
