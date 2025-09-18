<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container py-5">

        <h2 class="mb-4">submitted applications</h2>
        <table class="table table-bordered table-hover">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>CV</th>
                    <th>pfp</th>
                </tr>
            </thead>

            <tbody>

                <?php
                include './db.php';

                $result = $conn->query("SELECT * from job form");

                while ($row = $result->fetch_assoc()) {

                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['position'] ?></td>
                        <td><?php echo $row['cv'] ?></td>
                        <td><?php echo $row['pfp'] ?></td>
                        <a href="./AllResumes/ <?php echo $row['cv']; ?>" target="_blank" class="btn btn-sml btn-secondary">view</a>
                        <a href="./AllProfiles/ <?php echo $row['pfp']; ?>" target="_blank" class="btn btn-sml btn-secondary">view</a>
                    </tr>

                <?php
                }

                ?>
            </tbody>
        </table>








    </div>
</body>

</html>