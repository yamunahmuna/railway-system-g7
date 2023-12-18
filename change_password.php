
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

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $employee_id = $_POST['employee_id'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
  
// Hash new password and confirm password
    $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
    $hashed_confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);

       // SQL query to insert data into the database with hashed passwords
    $sql = "INSERT INTO password_changes (employee_id, old_password, new_password, confirm_password) 
            VALUES ('$employee_id', '$old_password', '$hashed_new_password', '$hashed_confirm_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Password changed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Side Navigation Bar</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="view.css">
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
    input[type="password"],
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
        <h2>Change Password</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validateForm()">
            <label for="employee_id">Crew Id:</label>
            <input type="text" id="employee_id" name="employee_id"><br><br>
  
            <label for="old_password">Old Password:</label>
            <input type="password" id="old_password" name="old_password"><br><br>
  
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password"><br><br>
 
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password"><br><br>
  
            <input type="submit" value="Save">
        </form>
    </div>
</div>

<script>
    function validateForm() {
        const newPassword = document.getElementById("new_password").value;
        const confirmPassword = document.getElementById("confirm_password").value;

if (newPassword !== confirmPassword) {
            alert("New password and confirm password do not match");
            return false;
        }
        return true;
    }
</script>

</body>
</html>