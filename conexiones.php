<?php
$servername = "sql10.freesqldatabase.com";
$database = "sql10447229";
$username = "sql10447229";
$password = "bWFm8hPcdC";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>