<?php

$host = "107.180.1.16";
$dbname = "fall2023team3";
$username = "fall2023team3";
$password = "fall2023team3";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;