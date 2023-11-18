<!-- details.php -->
<?php
include 'db.php';

// Fetch and display data
$sql = "SELECT * FROM contact_table";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
      body {
    font-family: 'Georgia', serif;
    
    color: wheat; /* Text color */
    margin: 0;
    padding: 20px;
    background-image: url('background.jpg'); ;
            background-size: cover;
}

h2 {
    color: #4caf50; /* Heading color */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #555; /* Border color */
    padding: 12px;
    text-align: left;
}

th {
    background-color: ;
    color: white;
}

/* Add this to your existing CSS */
tr {
    /* Background color for all rows */
}

tr:hover {
    background-color: #777; /* Darker shade on hover for all rows */
}


/* Stylized button */
button {
    background-color: #4caf50;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth transition */
}

button:hover {
    background-color: #45a049; /* Darker shade on hover */
}
@media screen and (max-width: 600px) {
        body {
            padding: 10px; /* Adjusted padding for smaller screens */
        }

        table {
            font-size: 14px; /* Adjusted font size for better readability on smaller screens */
        }
    }

    </style>
</head>
<body>

<br>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Use the correct array keys
            echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["mesage"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No submissions yet</td></tr>";
    }
    ?>

</table>

</body>
</html>

<?php
// Close connection
$conn->close();
?>
