<?php
require 'config.php';

$result = $conn->query("SELECT * FROM users");

while($user = $result->fetch_assoc()){
    echo "ID: {$user['id']} - Username: {$user['username']} - Email: {$user['email']}<br>";
}
?>