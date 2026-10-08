<?php

$servername = "localhost";
$username = "phpuser";
$password = "";
$database = "feedback_system";
$port = 3306;

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database,
    $port
);

if (!$conn) {
    die("Database Not Connected: " . mysqli_connect_error());
}

echo "Database Connected";

?>