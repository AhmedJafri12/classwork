<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php 
        include './db.php';


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$position = $_POST['position'];


$cvName = $_FILES['cv']['name'];

$cvtemp =$_FILES['cv']['tmp_name'];
$uploadDir = "AllResumes/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
}

$newFile = time() . "-" . basename($cvName);
$destination = $uploadDir . $newProfile;


$PFPName = $_FILES['pfp']['name'];

$PFPtemp =$_FILES['pfp']['tmp_pfp'];
$PFPDir = "AllProfiles/";

if (!is_dir($PFPDir)) {
    mkdir($PFPDir);
}

$newProfile = time() . "-" . basename($PFPName);
$PFPdestination = $PFPDir . $newProfile;




if (move_uploaded_file($cvtemp, $destination) && move_uploaded_file($tmp_pfp, $PFPdestination)){
    $sql = "INSERT INTO job form (fullname, email, gender, position)";

if ($conn->query($sql)) {
?>
<div class="alert alert-success mt-3">
    <h6>shukria <?php echo $fullname?> aapne hamara intekhaab kia </h6>
    <a href="" target="_blank" class="btn btn-sml btn-primary">view</a>
    <a href="" target="_blank" class="btn btn-sml btn-primary">back</a>
</div>


<?php
}
}
        ?>
    </div>
</body>
</html>