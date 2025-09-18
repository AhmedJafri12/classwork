<?php
$sername = "localhost";
$database = "ahmed2";
$username  = "root";
$password = "";

$conn = mysqli_connect($sername,$username,$password,$database);

if(!$conn){
echo "connection failed";
}
?>