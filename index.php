<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
   exit(); // Ensures that the script stops executing after the redirect
}

// Set a cookie for the last visited time
$lastVisited = date("Y-m-d H:i:s"); // Current date and time
setcookie("last_visited", $lastVisited, time() + (86400 * 30), "/"); // Cookie expires in 30 days
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to GROUP 2 Dashboard</h1>
        
        <?php
        // Check if the last visited cookie is set and display it
        if (isset($_COOKIE["last_visited"])) {
            echo "<p>Your last visit was on: " . $_COOKIE["last_visited"] . "</p>";
        }
        ?>
        
        <a href="logout.php" class="my-button">Logout</a>
        <a href="profile.php" class="cute-button">Gallery</a>
        <a href="myfile.php" class="cute-button">Course</a>
        <a href="https://docs.google.com/spreadsheets/d/1-nE8npvruD2oJkMhYUn4kfoRpt7gSG17HU-_ZWpN4Ug/edit?gid=0#gid=0" class="googlesheet">Google Sheet</a>
        <a href="https://docs.google.com/spreadsheets/d/1tmdTsip9J4nwcI4659eZh0AbD4KhYwf3-etm8TObhb8/edit?gid=0#gid=0" class="chart">Gannt Chart</a>
    </div>
</body>
</html>