
<?php
// Database configuration
$dbHost     = "fdb34.awardspace.net";
$dbUsername = "3947400_web";
$dbPassword = "4N1@space.com";
$dbName     = "3947400_web";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
