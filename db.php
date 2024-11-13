<?php
// database connection
$server_name = "localhost";
$username = "root";
$password = "";
$database = "login";

// $server_name = "sql210.infinityfree.com";
// $username = "	if0_37481028";
// $password = "PoTchQheWV9";
// $database = "if0_37481028_hosting";

// connection
$conn = new mysqli($server_name, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>