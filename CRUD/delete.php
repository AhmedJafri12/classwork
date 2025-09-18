<?php

include("DB.php");

$id = $_GET("id");


$q = "delete from user where id = '$id'";

$res = mysqli_query($conn,$q);

if ($res) {
    header("Location:read.php");
}else{
    echo "Error!!!";
}

echo $res;
?>