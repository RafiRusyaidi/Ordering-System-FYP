<?php
// Connect to your database
require 'database/db_connect.php';

// Example password
$password = 'admin123';

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into the database
$username = 'admin';
$sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Password hashed and inserted successfully";
} else {
    echo "Error inserting password: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
