
<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$Q = "INSERT INTO log_in (username, password) values ('$username', '$password')";
 $result = $conn->query($Q);

if ($result) {
    echo "REGISTRATION SUCCESSFULL";
} else {
echo "registration failed";    
}




}
?>