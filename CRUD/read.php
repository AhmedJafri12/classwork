<?php
include("DB.php");

$q = "selct * from user";

$row = mysqli_query($conn,$q);

$res = mysqli_num_rows($row);

?>

<div class="container">
    <a class=" btn btn-primary" href="create.php">Add new data</a>
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            while($data = mysqli_fetch_array($row)) {

                echo   "<tr>";
                echo     "<td>".$data('id')."</td>";
                echo     "<td>".$data('name')."</td>";
                echo     "<td>".$data('email')."</td>";
                echo     "<td><a class = 'btn btn-danger' href=delete.php?
                id=".$data('id') .">Delete</a></td>";

                echo     "</tr>";
            }

            ?>
        </tbody>
    </table>
    
</div>