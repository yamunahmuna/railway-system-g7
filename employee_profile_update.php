<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // Change this if you have a password for your database
$dbname = "employee_management"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactnumber'];
    $position = $_POST['position'];
    $department = $_POST['department'];

    // SQL to update data in the table
    $sql = "UPDATE users_table 
            SET name='$name', email='$email', contactNumber='$contactNumber', position='$position', department='$department'
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
