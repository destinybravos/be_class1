<?php 
include_once "connection.php";
// A variable  holding an SQL Statement 
$sql_command = "SELECT username, email, phone FROM users";
// Execuute the SQL Statement
$userquery = $conn->query($sql_command);

$users = [];
if ($userquery->num_rows > 0) {
    while ($user = $userquery->fetch_assoc()) {
        array_push($users, $user);
    }
}

header('Content-Type: application/json');
echo json_encode($users, 1);

?>