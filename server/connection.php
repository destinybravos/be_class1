<?php
// Server Credential 
$server_host = 'localhost';
$server_user = 'root';
$server_password = '';
$database = 'skyrootnet';

// Connecting to server
$conn = new mysqli($server_host, $server_user, $server_password, $database);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}


?>