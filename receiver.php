<?php


// Check if the variable is set
if (isset($_GET['variable'])) {
    $receivedVariable = $_GET['variable'];

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

    // Insert the variable into the table
    $sql = "INSERT INTO var (variable) VALUES ('$receivedVariable')";

    if (mysqli_query($conn, $sql)) {
        echo "Variable stored successfully";
    } else {
        echo "Error storing variable: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "No variable received";
}
?>