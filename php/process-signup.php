<?php
var_dump($_POST);
if (empty($_POST["id"])) {
    die("User Name is required");
}

if (strlen($_POST["pw"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["pw"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["pw"])) {
    die("Password must contain at least one number");
}

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (username, password)
        VALUES (?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ss",
                  $_POST["id"],
                  $_POST["pw"]);
                  
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("username already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}






