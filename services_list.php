<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Services</title>
</head>
<body>

<h2>Services List</h2>

<?php include "nav.php"; ?>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Rate</th>
    <th>Active</th>
    <th>Action</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM services ORDER BY service_id DESC");

if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['service_id']."</td>";
  echo "<td>".$row['service_name']."</td>";
  echo "<td>".$row['description']."</td>";
  echo "<td>₱".number_format($row['hourly_rate'],2)."</td>";
  echo "<td>".($row['is_active'] ? 'Yes' : 'No')."</td>";
  echo "<td><a href='service_edit.php?id=".$row['service_id']."'>Edit</a></td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>