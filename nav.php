<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>



<div class="wrapper">
    <div class="sidebar">
        <h2>USER</h2>
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
        <div class="info">
            <div>Rail transport is a means of transport using wheeled vehicles running in tracks, which usually consist of two parallel steel rails. 
			Rail transport is one of the two primary means of land transport, next to road transport.
				</div>
           
        </div>
    </div>
</div>

</body>
</html>
