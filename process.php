<?php
include 'db.php';
// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO contact_table (fname, lname, email, phone_number, mesage) VALUES ('$firstName', '$lastName', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: details.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
