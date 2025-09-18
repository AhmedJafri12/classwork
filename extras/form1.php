<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container m-5">
        <a class="btn btn-primary" href="read.php">all data</a>
<form action="" method="post">
<input class="form-control" type="text" name="n" placeholder="name" required> <br>
<input class="form-control" type="email" name="e" placeholder="email" required> <br>
<input class="btn btn-primary" type="submit" value="add data" name="sbtn">



</form>
    </div>
</body>
</html>


<?php
include("db.php");

if (isset($_POST["sbtn"])) {

$name = $_POST["n"];
$email = $_POST["e"];


$q = "insert into form1(name,email)values ('$name','$email')";

$result = mysqli_query($conn,$q);
if ($result) {
    // echo "successful";
    header("location:read.php");
}
else{
    echo "error";
}

echo "<script>
alert ('successfully submitted');
</script>";

}
?>