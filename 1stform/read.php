<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<?php

include("db.php");

$q = "select * from form1";

$row = mysqli_query($conn,$q);

$res =mysqli_num_rows($row);

?>

<div class="container m-5">
<a href="form1.php" class="btn btn-primary">new data</a>
<table class="table table-bordered">
<thead>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Delete</th>
</thead>
<tbody>
<?php
while ($data = mysqli_fetch_array($row)) {
echo "<tr>";
echo "<td>".$data['id'] ."</td>";
echo "<td>".$data['name'] ."</td>";
echo "<td>".$data['email'] ."</td>";
echo "<td><a class='btn btn-danger' href=delete.php?id=" .$data['id'].">delete</a></td>";
echo "<td><a class='btn btn-warning' href=update.php?id=" .$data['id'].">update</a></td>";
echo "</tr>";
}
?>
</tbody>
</table>
</div>


