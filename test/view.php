<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #ok{
        display: flex;
        flex-direction: row;
    }
</style>

<?php
include("db.php");

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
<body>
    
<div id="ok
" class="container text-center ">
  <div class="row">
  <div class="col-12 row-cols-4 ">
    <!-- <div class="col"> -->
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <p class="card-text">
                <strong>Author:</strong> <?php echo $row['author']; ?><br>
                <strong>Category:</strong> <?php echo $row['category']; ?><br>
                <strong>Year:</strong> <?php echo $row['published_year']; ?>
            </p>
        <!-- </div> -->
    </div>
  </div>
</div>
</div>
</div>
<?php
    }
}
?>