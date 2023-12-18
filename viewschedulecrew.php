<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="view.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<title>View Schedule</title>

	<style>
	
	.box {
  
  width: 80%;
  height: 700px;
  border: 1px solid black;
  padding: 20px;
  box-sizing: border-box;
  justify-self:center;
  align-self:center;
  margin-bottom:auto;
}
	.okay-button {
		padding: 15px 30px; /* Adjust padding to increase button size */
		font-size: 20px;	  /* Adjust font size */
		background-color: blue;
	}
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
	table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  text-align: center;
  padding: 16px;
  font-size: 18px;

}

th {
  background-color: #654321;
  color:white;
  text-align: center;
}
label {
  display: block;
  margin-bottom: 5px;
  margin-right:10px;
}

input {
  padding: 8px;
  width: 210px;
  margin-right:40px;
}
.textbox-container {
  display: flex;
  flex-direction: row;
  gap: 10px;
  margin-right:40px;
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
			<center>
				<h2>View Schedule</h2>
				
           
			<form method="GET" action="">
            <div class="textbox-container">
            <label for="search">Search:</label>
             <input type="text" id="search" name="search">
              <button type="submit" name="searchButton">Search</button>
   </div>
</form>
</div><br>
				</center>
				<br><br><br>
				<div class="main_content">
					<div class="container">
						<div class="box">
						 </form>
							<?php 
								// Database connection settings 
								$servername = "localhost"; 
								$dbname = "employee_management"; 
								$username = "root"; 
								$password = ""; 
			// Create connection 
								$conn = new mysqli($servername, $username, $password, $dbname); 

								// Check connection 
								if ($conn->connect_error) { 
									die("Connection failed: " . $conn->connect_error); 
								} 
								// Fetch employee schedule data 
								$sql = "SELECT * FROM viewschedule"; 
								$result = $conn->query($sql); 

								if ($result->num_rows > 0) { 
									// Output data of each row 
									echo "<table border='1'>"; 
									echo "<thead>"; 
									echo "<tr><th>No</th><th>Name</th><th>jobroles</th><th>Duty time</th><th>Start time</th><th>End time</th></tr>"; 
									echo "</thead>"; 
									echo "<tbody>"; 
									while ($row = $result->fetch_assoc()) { 
										echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["jobroles"] . "</td><td>" . $row["duty time"] . "</td><td>" . $row["starttime"] . "</td><td>" . $row["endtime"] . "</td></tr>"; 
									} 
									echo "</tbody>"; 
									echo "</table>"; 
								} else { 
									echo "0 results"; 
								} 

								$conn->close(); 

								
							?>
							

								
						</div>
					</div>
			
			
	
	</div>
	<script>
		function showAlert() {
			alert("This is an alert message!");
			// Redirect to the next page
			window.location.href = "nav.php"; // Replace 'next_page.html' with your desired page
		}
	</script>
</body>
