<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <?php 
    include './db.php';
    
    // Collect form Data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    
    //Handling file uploading
    
    $cvName = $_FILES['cv']['name'];
    $cvTem = $_FILES['cv']['tmp_name'];
    $uploadDir = "AllResumes/";
    
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir);
    }
    
    $newfile = time() . "-" . basename($cvName);
    $destination = $uploadDir . $newfile;

    if (move_uploaded_file($cvTem, $destination)) {
        $sql = "INSERT INTO applications (fullname, email, gender, position, cv_filename) values
         ('$fullname', '$email', '$gender', '$position', '$newfile')";

         if($conn->query($sql)){



    ?>
    
    <div class="alert alert-succes mt-3">
        <h6>Thank You <strong><?php echo $fullname ?></strong> you have successfully Registered.</h6>
    </div>
<?php

         }
    }

?>

</div>