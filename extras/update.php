<?php
include("db.php");
$id = $_GET["id"];

$q = "select * from form1 where id = '$id'";

$row = mysqli_query($conn , $q);

$data = mysqli_fetch_array($row);

?>
<div class="container m-5">
        <a class="btn btn-primary" href="read.php">all data</a>
<form action="" method="post">
<input class="form-control" type="text" name="n" placeholder="name" value="<?php echo $data['name'] ?>" required> <br>
<input class="form-control" type="email" name="e" placeholder="email" value="<?php echo $data['email'] ?>" required> <br>
<input class="btn btn-primary" type="submit" value="add data" name="ubtn">



</form>
    </div>
<?php
if (isset($_POST["ubtn"])) {

    $name = $_POST["n"];
    $email = $_POST["e"];
    
    
    $q = "update form1 set name = '$name', email = '$email' where Id = '$id'";
    
    $result = mysqli_query($conn,$q);
    if ($result) {
        // echo "successful";
        header("location:read.php");
    }
    else{
        echo "error";
    }
}
