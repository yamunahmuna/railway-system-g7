<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $crewId = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactnumber'];
    $position = $_POST['position'];
    $department = $_POST['department'];

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

    // SQL to insert data into the table
    // SQL to insert data into the table
$sql = "INSERT INTO crew_profile (crewId, name, email, contactNumber, position, department)
VALUES ('$crewId', '$name', '$email', '$contactNumber', '$position', '$department')";


    if ($conn->query($sql) === TRUE) {
        echo "Update record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <title>Employee Profile</title>
  <style>
 

    /* Style for form */
    form {
      border: 5px solid #ccc;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="submit"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #333;
      color: white;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
		      
             <li><a href="nav.php"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="employee_profile.php"><i class="fas fa-user"></i>Crew Profile</a></li>
            <li><a href="change_password.php"><i class="fas fa-address-card"></i>Change Password</a></li>
            <li><a href="viewschedulecrew.php"><i class="fas fa-project-diagram"></i>View Schedule</a></li>
            <li><a href="index.php" onclick="return confirm('Are you sure you want to log out?')"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
            
            
        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  

<div class="content">
  <h2>Crew Profile</h2>
  <form action="employee_profile.php" method="post">
  
    <label for="id">Crew Id:</label>
    <input type="text" id="id" name="id"><br><br>
	
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="contactnumber">Contact Number:</label>
    <input type="text" id="contactnumber" name="contactnumber"><br><br>

    <label for="position">Position:</label>
    <input type="text" id="position" name="position"><br><br>
    
    <label for="department">Department:</label>
    <input type="text" id="department" name="department"><br><br>
    
    <input type="submit" value="Save">
  </form>
</div>

<?php
// Your PHP logic for handling form submission or database operations can go here.
// For example, processing form data after submission:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $crewId = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactnumber'];
    $position = $_POST['position'];
    $department = $_POST['department'];

    // Now you can use this data to save to the database or perform other operations.
    // Insert the data into your database table using SQL queries or use an ORM if available.
}
?>
</body>
</html>

