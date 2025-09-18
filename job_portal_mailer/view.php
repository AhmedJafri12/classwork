<?php
include './db.php';
$pageTitle = "Recived Applications";

$sql = "SELECT * FROM applications ORDER BY created_at DESC";
$result = $conn->query($sql);
// print_r($result);
include 'header.php';
?>

<h2 class="mb-4">Submitted Applications</h2>
<table class="table table-bordered table-hover">
  <thead class="table-info">
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Position</th>
      <th>CV</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?= $row['id']; ?></td>
          <td><?= ($row['fullname']); ?></td>
          <td><?= ($row['email']); ?></td>
          <td><?= $row['gender']; ?></td>
          <td><?= $row['position']; ?></td>
          <td>
            <a href="uploads/<?= $row['cv_filename']; ?>" target="_blank" class="btn btn-sm btn-info">View</a>
          </td>
        </tr>
      <?php
      }
    } else {
      ?>
      <tr>
        <td colspan="7" class="text-center">No applications found.</td>
      </tr>
    <?php
    }
    ?>
  </tbody>

</table>

<?php include 'footer.php'; ?>