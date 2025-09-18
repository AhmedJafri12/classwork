<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM log_in where username = '$username'";

$result = $conn->query($q);

if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $row['username'];
        header("Location: welcome.php");
        exit();
    } else {
        echo "incorrect password";
    }
    
} else {
    echo "user not found";
}

}





?>