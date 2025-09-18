<?php
$pageTitle = "process.php";
include './db.php';
include 'header.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name     = $_POST['fullname'];
  $email    = $_POST['email'];
  $gender   = $_POST['gender'];
  $position = $_POST['position'];

  // Handle file upload
  $cvName = $_FILES['cv']['name'];
  $cvTmp  = $_FILES['cv']['tmp_name'];
  $uploadDir = "uploads/";

  if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
  }

  $newFileName = time() . "_" . basename($cvName);
  $destination = $uploadDir . $newFileName;

  if (move_uploaded_file($cvTmp, $destination)) {
    $sql = "INSERT INTO applications (fullname, email, gender, position, cv_filename)
            VALUES ('$name', '$email', '$gender', '$position', '$newFileName')";

    if ($conn->query($sql)) {
      //  Email Section Starts

     $mail = new PHPMailer(true);

// server setting

try {
  $mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'ahmedjafri39@gmail.com';
$mail->Password = '';
$mail->SMTPSecure = 'tls';
$mail->Port = '587';

$mail->setFrom('ahmedjafri39@gmail.com', 'Aptech Learning Pakistan');
$mail->addAddress($email, $name);

$email->isHTML(true);
$mail->Subject = "Aplication recieved";
$mail->Body = "

<h4>Dear $name,</h4>
<p>Thank you for applying for the <strong>$position</strong>position</p>
<p>We have suucessfully recieved your application and will review it shortly.</p>
<br>
<p>Best regards,<br>HR Team</p>

" ;

$mail->send();
echo "</body>
<div class='alert alert-success'>
<h6>Thank you, <strong>$name</strong>. Your application has been submitted and a confirmation email has been sent to <strong>$email</strong>.</h6>

</div>";



} catch (\Exception $e) {
 echo "<div class='alert alert-warning'>Applicarion submitted,but email could not be sent. Error:{$mail->ErrorInfo}</div>
";
}








      echo '<a href="index.php" class="btn btn-primary">Back to Form</a> ';
      echo '<a href="view.php" class="btn btn-success">View Applications</a>';
    }
  }
}

include 'footer.php';
