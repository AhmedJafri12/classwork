<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container py-5">

<h2 class="mb-4">Applicants Detail </h2>
<table class="table table-borderd table-hover">
<thead class="table-info">

<tr>
    <th>ID</th>
    <th>FULL NAME</th>
    <th>EMAIL</th>
    <th>GENDER</th>
    <th>POSITION</th>
    <th>CV</th>
    <th>Profile Pictures</th>
</tr>
</thead>

<tbody>

<?php

include("db.php");

$result =$conn->query("SELECT * FROM applications");

while ($row = $result->fetch_assoc()) {

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['position']; ?></td>

    <td>
        <a href="AllResumes/<?php echo $row['cv_filename'];?>" target="_blank" class="btn btn-sm btn-info">view</a>
    </td>
    <td>
        <a href="Profile_Pictures/<?php echo $row['profile_picture'];?>" target="_blank" class="btn btn-sm btn-info">view</a>
    </td>
</tr>


<?php
}
?>



</tbody>



</table>


    </div>
</body>
</html>