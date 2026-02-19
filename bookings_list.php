<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bookings</title>
</head>
<body>
<h2>Bookings List</h2>

<?php include "nav.php"; ?>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Client ID</th>
    <th>Service ID</th>
    <th>Date</th>
    <th>Status</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM bookings");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['client_id']."</td>";
  echo "<td>".$row['service_id']."</td>";
  echo "<td>".$row['booking_date']."</td>";
  echo "<td>".$row['status']."</td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>