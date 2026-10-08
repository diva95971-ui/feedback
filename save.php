<?php
include "db.php";

$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback (name, message)
        VALUES ('$name', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Feedback Saved Successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

echo "<br><a href='index.php'>Go Back</a>";
?>