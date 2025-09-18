<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>


    <div class="container m-5">
        <form action="" method="post">
            <input class="form-control" type="text" name="N" placeholder="enter your name" required>
            <input class="form-control" type="text" name="E" placeholder="enter your email" required><br>
            <input class="btn btn-primary" type="submit" name="sbtn" value="submit here">
        </form>
    </div>

    <?php
    // datadase connection 
    $sername = "localhost";
    $database = "sj_form";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($sername, $username,  $password, $database);

    if (!$conn) {
        echo "connection failed";
    }

    // code connection

    if (isset($_POST["sbtn"])) {
        $name = $_POST["N"];
        $email = $_POST["E"];

        $q = "insert into user (name,email) values('$name','$email')";
        $result = mysqli_query($conn, $q);

        if ($result) {
            echo "data insert sucessfully";
        } else {
            echo "error";
        }
    }




    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>