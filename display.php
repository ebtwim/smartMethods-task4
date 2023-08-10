<?php
// Connect to the database
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'myvar';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the variable from the table
$sql = "SELECT Variable FROM var ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $storedVariable = $row['variable'];
    echo "Stored Variable: " . $storedVariable;
} else {
    echo "No variable stored";
}

// Close the database connection
mysqli_close($conn);
?>